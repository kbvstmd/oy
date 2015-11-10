# my_rscript1.R
args <- commandArgs(TRUE)
N <- args[1]
load("FourDatasets.Rdata")    
library(rms)
library(survival)
S5 <- with(data_symbol_T_cli, Surv(Survtime,Surv))
variable<-unlist(strsplit(N, split="+",fixed=T))
P = rep(NA,length(variable))
for(i in 1:length(variable)){
  P[i] = anova(cph(as.formula(paste("S5~",variable[i])),data=data_symbol_T_cli))[5]
  d1<-data_symbol_T_cli[,variable[i]]
  group = ifelse(d1<=median(d1),1,2)
  png(filename=paste(variable[i],".png"), width=600, height=400)
  kmfit1<-npsurv(S5~group,data=data_symbol_T_cli)
  survplot(kmfit1, conf='none',col=1:2,xlab='survival time in days',ylab='survival probabilities')
  legend("topright",col=1:2,c("Low Risk","High Risk"),lwd=5)
  legend(4,0.2,round(P[i],2),bty="n")
  legend(0.2,"P=",bty="n")
  title(variable[i])
  dev.off() 
}
write.csv(round(P,2), file = "foo.csv", row.names = F, quote = F) # 空格分隔
