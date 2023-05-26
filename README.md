Film-Dizi sektöründe vizyono giren yerli/yabancı filmleri güncel bir şekilde takipçileriyle paylaşıp, çeşitli sinema fimleri üzerine incelemeler yapılabilen sinema blog sitesi. 

CinemaVizyon şirketi, kullaıcılarına vizyona giren yüzlerde dizi ve filmi anlık olarak takip edip, yeni film/dizi ekleyebilme, var olan bir filmi puanlayabilme ve yorum yapabilme hizmeti sağlar. Bu uygulama ile kullanıcıların vizyona giren filmleri en güncel şekilde takip edilmesi amaçlanmıştır. 

Database için MySQL kullanılmıştır, xml şeklinde projeye eklenmiştir. (laravel9firstcinema.xml)


Installation

Clone the Repo:

> git clone https://github.com/baytursevval/Laravel9-firstcinema.git

> cd hospitalMS

> composer install or composer update

> cp .env.example .env

> Set up .env file

> php artisan key:generate

> php artisan storage:link

> php artisan migrate:fresh --seed

> php artisan serve

http://127.0.0.1:8000/
