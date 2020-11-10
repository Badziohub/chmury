Zeby zbudowac obraz bez kopiowania plikow z repo, nalezy uzyc komendy:

docker build https://github.com/Badziohub/chmury.git -t helo

nastepnie zeby odtworzyc obraz nalezy uzyc komendy:

docker run -p 80:80 -e github="https://github.com/Badziohub/chmury" -it helo

w przegladarce wejsc na "localhost:80" i gotowe

