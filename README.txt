0) Nainstalovat Docker, zkopirovat celou slozku, otevrit CMD v dane slozce
1) Spustit build: docker build .
2) Vystupem je image, jeji kod je napsany ve vystupu buildu (napr. 59e73bcfe0cb)
3) Spustit image: docker run -d -p 8080:8080 -p 80:80 59e7 (tady staci prvni 4 znaky identifikatoru image)
 (-p znamena propojeni portu mezi docker kontejnerem a hostitelskym PC - 8080 pro linkedpipes a 80 pro web se statistikama)
 4) ???
 5) PROFIT