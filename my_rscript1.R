# my_rscript1.R
args <- commandArgs(TRUE)
N <- args[1]
outfile <- file("D://NT1.txt", "w")
cat(N,file=outfile) 
