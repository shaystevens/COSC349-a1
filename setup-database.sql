CREATE TABLE bookings (
  Customerid int NOT NULL AUTO_INCREMENT,
  customer_name varchar(100) NOT NULL,
  dogs varchar(100) NOT NULL,
  booking_date DATE NOT NULL,
  booking_hours int(12) NOT NULL,
  PRIMARY KEY (Customerid)
);

INSERT into bookings (customer_name, dogs, booking_date, booking_hours) VALUES('Michael Johnson', '[DW-001, DW-002, DW-003]', '2022-12-29', 12);
