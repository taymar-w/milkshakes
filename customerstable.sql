Create table Customers
(customer_id INT, full_name char(30), email char(50),homeAddress char(100), phone_num char(20), FOREIGN KEY (customer_id) REFERENCES milkshakeOrders(customer_id));