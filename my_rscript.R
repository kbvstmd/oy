# my_rscript.R
args <- commandArgs(TRUE)
N <- args[1]
load("FourDatasets.Rdata")    
library(rms)
S5 <- with(data_symbol_cli_T, Surv(Survtime,Surv==1))
f2<-cph(as.formula(paste("S5~",N)),surv=TRUE,x=TRUE,y=TRUE,data=data_symbol_cli_T)
f1<-anova(f2)
write.csv(round(f1,7),file = "543.csv")
png(filename="temp.png", width=900, height=600)
plot(f1)
dev.off()
da<-validate(f2,data=data_symbol_cli_T,B=200,dxy=TRUE)
write.csv(round(da,4),file = "da.csv")
da2<-validate(f2,data=data_symbol_T_cli,B=200,dxy=TRUE)
write.csv(round(da2,4),file = "da2.csv")

