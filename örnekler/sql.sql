SELECT * FROM `kullanicilar`
SELECT * FROM `customers`
UPDATE customers SET customerName='ali',contactName='Kerim' WHERE customerID=1
SELECT * FROM `customers`
DELETE FROM customers WHERE customerID=2
SELECT * FROM `customers`
SELECT * FROM `kullanicilar`
DELETE From kullanicilar WHERE id=1
SELECT * FROM `kullanicilar`
SELECT * FROM `kullanicilar`
SELECT * FROM `kullanicilar`
SELECT * FROM `kullanicilar`
SELECT * FROM `kullanicilar`
CREATE TABLE `libraries`.`books` ( `id` INT NOT NULL , `name` VARCHAR(50) NOT NULL , `price` INT(10) NOT NULL , `author` VARCHAR(50) NOT NULL , `created` DATE NOT NULL , `updated` DATE NOT NULL ) ENGINE = InnoDB;
Genişlet Yeniden sorgula Düzenle Açıkla Profil çıkart Yer imi Veritabanı : libraries Sorgu süresi : Şu anki oturum sırasındaSELECT * FROM `books`
INSERT INTO `books` (`id`, `name`, `price`, `author`, `created`, `updated`) VALUES ('', 'hazerfan', '1000', 'hazerfan', '2021-03-14', '2021-03-14');
INSERT INTO `books` (`id`, `name`, `price`, `author`, `created`, `updated`) VALUES (1, 'hazerfan', '1000', 'hazerfan', '2021-03-14', '2021-03-14')
SELECT * FROM `books`
SELECT * FROM `books`
SELECT * FROM `books`
SELECT * FROM `books`
SELECT * FROM `books`
SELECT * FROM `books`
INSERT INTO `books` (`id`, `name`, `price`, `author`, `created`, `updated`) VALUES ('1', 'hazerfan', '1000', 'hazerfan', '2021-03-14', '2021-03-14');
SELECT * FROM `books`
SELECT * FROM `books`
DROP TABLE `books`
CREATE TABLE `libraries`.`books` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `name` VARCHAR(50) NOT NULL , `price` INT(10) NOT NULL , `author` VARCHAR(50) NOT NULL , `created` DATE NOT NULL , `updated` DATE NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
INSERT INTO `books` (`id`, `name`, `price`, `author`, `created`, `updated`) VALUES (NULL, 'hazerfan', '1000', 'hazerfan', '2021-03-14', '2021-03-14');
SELECT * FROM `books`
SELECT * FROM `books`