N<-"SPTBN1+COL6A3+DST+MLL4+NOS1+SDK1+LRP1+CHL1+CUBN+HERC2+LAMA1+NEB+PCDH7"
load("FourDatasets.Rdata")
library(rms)
library(survival)
S5 <- with(data_symbol_T_cli, Surv(Survtime,Surv==1))
# dang yingshu fengxi.R
variable<-unlist(strsplit(N, split="+",fixed=T))
P = rep(NA,length(variable))
for(i in 1:length(variable)){
  P[i] = anova(cph(as.formula(paste("S5~",variable[i])),data=data_symbol_T_cli))[5]
  d1<-data_symbol_T_cli[,variable[i]]
  group = ifelse(d1<=median(d1),1,2)
  png(filename=paste(variable[i],".png"), width=450, height=300)
  kmfit1<-npsurv(S5~group,data=data_symbol_T_cli)
  survplot(kmfit1, conf='none',col=1:2,label.curves=FALSE,xlab='survival time in month',ylab='survival probabilities')
  legend("topright",col=1:2,c("Low Level","High Level"),lwd=5)
  if(P[i]<0.001){
    legend(4,0.2,"<0.001",bty="n")}
  else{
    legend(4,0.2,round(P[i],3),bty="n")
  }
  legend(0.2,"P=",bty="n")
  title(variable[i])
  dev.off() 
}
write.csv(round(P,5), file = "foo.csv", row.names = F, quote = F) # 空格分隔
