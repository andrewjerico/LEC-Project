Website HORIZONS merupakan sebuah webite yang berisi informasi mengenai tempat wisata yang ada 
di Indonesia. User dapat menggunakan website ini untuk mencari tahu informasi mengenai destinasi 
wisata yang ingin dikunjungi seperti alamat dan estimasi biaya yang dibutuhkan untuk masuk ke tempat 
wisata tersebut. User juga dapat mem-bookmark (wishlist) tempat wisata sebagai penanda untuk 
rencana ke depannya. 
Terdapat 3 role dalam website ini yakni:
- guest => view only
- user => akses wishlist
- admin => akses CRUD operation ke dalam database
Secara default, user yang meregistrasikan akunnya memiliki nilai false pada kolom ‘is_admin’. Untuk 
membuat sebuah akun admin, maka dapat didefinisikan secara manual pada file ‘UserSeeder.php’. 
Ada juga beberapa premade account untuk digunakan :
- (Admin) andrew.jerico@hotmail.com / binusian
- (Admin) bayy@gmail.com / root
- (User) bayu@gmail.com / root