# my_rscript1.R
args <- commandArgs(TRUE)
N <- args[1]
load("FourDatasets.Rdata")    
library(rms)
library(Cairo)
S5 <- with(data_symbol_cli_N, Surv(Survtime,Surv==1))
# dang yingshu fengxi.R
variable<-unlist(strsplit(N, split="+",fixed=T))
P = rep(NA,length(variable))
for(i in 1:length(variable)){
  P[i] = anova(cph(as.formula(paste("S5~",variable[i])),data=data_symbol_cli_N))[5]
  d1<-data_symbol_cli_N[,variable[i]]
  group = ifelse(d1<=median(d1),1,2)
  CairoPNG(filename=paste(variable[i],".png"), width=450, height=300)
  kmfit1<-npsurv(S5~group,data=data_symbol_cli_N)
  survplot(kmfit1, conf='none',col=1:2,label.curves=FALSE,xlab='survival time in days',ylab='survival probabilities')
  legend("topright",col=1:2,c("Low Level","High Level"),lwd=5)
  if(P[i]<0.001){
  legend(300,0.2,"<0.001",bty="n")}
  else{
  legend(300,0.2,round(P[i],3),bty="n")
  }
  legend(0.2,"P=",bty="n")
  title(variable[i])
  dev.off() 
}
write.csv(round(P,5), file = "foo.csv", row.names = F, quote = F) # 空格分隔


# duo yingshu fengxi.R
f2<-cph(as.formula(paste("S5~",N)),surv=TRUE,x=TRUE,y=TRUE,data=data_symbol_cli_N)
f1<-anova(f2)
write.csv(round(f1,7),file = "543.csv")
CairoPNG(filename="temp.png", width=900, height=600)
plot(f1)
da<-validate(f2,data=data_symbol_cli_N,B=200,dxy=TRUE)
write.csv(round(da,4),file = "da.csv")
da2<-validate(f2,data=data_symbol_N_cli,B=200,dxy=TRUE)
write.csv(round(da2,4),file = "da2.csv")
