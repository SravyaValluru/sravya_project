SCHEMAS

RETAILERS SCHEMA:

retailer(Tablename)

email	firstname	lastname	address	pannumber              password	          shopname

BUYERS SCHEMA

customer(tablename)

email	firstname		lastname		address		password		mobilenumber

ORDERS SCHEMA

orders(tablename)

seller_email	customer_email	quantity

retailer_wallet(table)
seller_email	amount

customer_wallet	(table)

customer_email	amount

fruit_stores(table)

seller_email	fruit_name	quantity	price
1.Write SQL to get the number of retailers available in the system.

query: Select COUNT(email) from retailer;

2.Write SQL to get the shoppers counts for each retailer (who purchased).

query: Select COUNT(customer_email) from orders where seller_email = '$_COOKIE('seller_email')';

3.Write SQL to get all the shoppers count.

query: Select COUNT(email) from customer;

4. Write SQL to get purchase amount per amount per day wrt to a retailer

query: SELECT count(customer_email)*100 FROM orders WHERE seller_email = '$_COOKIE['seller_email']' AND DATE('timestamp') = CURDATE();

5. Write SQL to find the top retailer based on number of purchases
query: SELECT seller_email FROM orders WHERE MAX(SELECT count(seller_email) FROM orsers); 
