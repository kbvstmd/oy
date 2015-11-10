# my_rscript1.R
args <- commandArgs(TRUE)
N <- args[1]
load("FourDatasets.Rdata")  
library(rms)
library(Cairo)
S5 <- with(data_symbol_cli_T, Surv(Survtime,Surv==1))
S4 <- with(data_symbol_T_cli, Surv(Survtime,Surv==1))
# dang yingshu fengxi.R
variable<-unlist(strsplit(N, split="+",fixed=T))
P = rep(NA,length(variable))
for(i in 1:length(variable)){
  P[i] = anova(cph(as.formula(paste("S5~",variable[i])),data=data_symbol_cli_T))[5]
  d1<-data_symbol_cli_T[,variable[i]]
  group = ifelse(d1<=median(d1),1,2)
  if(d1<=median(d1)){risk=c("High Level","Low Level")}else{risk=c("Low Level","High Level")}
  CairoPNG(filename=paste(variable[i],".png"), width=450, height=300)
  kmfit1<-npsurv(S5~group,data=data_symbol_cli_T)
  survplot(kmfit1, conf='none',col=1:2,label.curves=FALSE,xlab='survival time in month',ylab='survival probabilities')
  legend("topright",col=1:2,risk,lwd=5)
   pvalue<-paste("P=",format(round(P[i],10), scientific = TRUE, digits = 2))
   legend(0,0.2,pvalue,bty="n")

  title(variable[i])
  dev.off() 
}
write.csv(round(P,5), file = "foo.csv", row.names = F, quote = F) # 空格分隔


# duo yingshu fengxi.R
mudata=data_symbol_cli_T[,variable]
dist.e=dist(mudata,method='euclidean')
CairoPNG(filename="heatmap.png", width=900, height=900)
heatmap(as.matrix(dist.e),labRow=F,labCol=F)
dev.off()


model1=hclust(dist.e,method='ward.D')
result=cutree(model1,k=2)

f2<-cph(as.formula(paste("S5~",N)),surv=TRUE,x=TRUE,y=TRUE,data=data_symbol_cli_T)
f1<-anova(f2)
as.numeric(S5)
ID1 = names(result)[result==1]
ID2 = names(result)[result==2]
median1=median(data_symbol_cli_T[ID1,"Survtime"])
median2=median(data_symbol_cli_T[ID2,"Survtime"])
if(median1<=median2){risk=c("High risk","Low risk")}else{risk=c("Low risk","High risk")}
CairoPNG(filename="multivariate.png", width=900, height=600)
kmfit1<-npsurv(S5~result,data=data_symbol_cli_T)
survplot(kmfit1, conf='none',col=2:1,label.curves=FALSE,xlab='survival time in month',ylab='survival probabilities')
legend("topright",col=2:1,risk,lwd=5)
pvalue<-paste("P=",format(round(f1['TOTAL','P'],10), scientific = TRUE, digits = 2))
legend(0,0.2,pvalue,bty="n")
title("survival analysis")
dev.off()


write.csv(round(f1,7),file = "543.csv")
CairoPNG(filename="temp.png", width=900, height=600)
plot(f1)
da<-validate(f2,data=data_symbol_cli_T,B=200,dxy=TRUE)
write.csv(round(da,4),file = "da.csv")


da2<-1-as.numeric(rcorr.cens(predict(f2), S5)[1])
da3<-1-as.numeric(rcorr.cens(predict(f2,newdata=data_symbol_T_cli), S4)[1])
write(da2,file = "da2.txt")
write(da3,file = "da3.txt")


