CREATE TABLE bookings (
  Customerid int NOT NULL AUTO_INCREMENT,
  customer_name varchar(100) NOT NULL,
  dogs varchar(100) NOT NULL,
  booking_date DATE NOT NULL,
  booking_hours int(12) NOT NULL,
  PRIMARY KEY (Customerid)
);

CREATE TABLE admin (
  username char(5),
  password char(40)
);

INSERT INTO admin (username, password) VALUES ("admin", SHA1("admin"));
