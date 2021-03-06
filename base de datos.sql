create database proyecto;
use proyecto;
create table usuario(Identificacion varchar(30) primary key,Nombre varchar(30),Apellido varchar(30),Login varchar(30),Contrasena varchar(30),Pregunta text,Respuesta text,NiAcc varchar(30));
insert into usuario values("1","felipe","gomez","yulius160","12345","pelicula preferida?","jack","Vendedor");
insert into usuario values("2","andres","castro","cas","543221","color preferida?","azul","Administrador");
insert into usuario values("3","carlos","sanchez","care","67890","grupo preferida?","skillet","vendedor");
create table factura(IdFac varchar(30)primary key,Fecha date, Direccion varchar(30),Telefono varchar(30),IdCli varchar(30), Nombre varchar(30));
insert into factura values("0001",2015-09-09,"calle 100 N 23 - 43","12345","1","felipe");
insert into factura values("0002",2015-06-02,"calle 123 N 01 - 05","543221","2","andres");
insert into factura values("0003",2015-03-04,"calle 250 N 33 - 11","67890","3","carlos");
create table detalleFac(IdFac varchar(30),conseItem varchar(30),IdProduc varchar(30)primary key, Cantidad int(30),VlrUni int(30));
insert into detalleFac values("0001","carro de juguete","112233",8,350000);
insert into detalleFac values("0002","cuadernos","332211",3,20000);
insert into detalleFac values("0003","libros","442200",9,5550000);
create table producto(IdProduc varchar(30)primary key,NombreProduc varchar(30),Existencia varchar(30),StockMinimo varchar(30),IdProveedor varchar(30));
insert into producto values("112233","carro de juguete","si","10","123456789");
insert into producto values("332211","cuadernos","si","10","123456789");
insert into producto values("442200","libros","si","10","123456789");