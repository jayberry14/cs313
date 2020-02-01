\echo '*********************List all restaurant names*********************'
-- write your query here
SELECT name FROM w4_restaurant;
\echo '****************List restaurant names and addresses****************'
-- write your query here
SELECT name, address FROM w4_restaurant;
\echo '************************List  all customers************************'
-- write your query here
SELECT * FROM w4_customer;
\echo '**List  all menu item names and prices of a particular restaurant**'
-- write your query here
SELECT name, price FROM w4_menu_item WHERE restaurant_id = 1;
\echo '*View all orders of a particular customer - show the customer name*'
-- write your query here
SELECT o.id AS "Order ID"
     , first_name AS "First Name"
     , last_name AS "Last Name"
     , mi.name AS "Menu Item"
     , mi.price AS "Price of Item"
FROM w4_order o
INNER JOIN w4_customer ON o.customer_id = w4_customer.id
INNER JOIN w4_order_menu_items omi ON omi.order_id = o.id
INNER JOIN w4_menu_item mi ON omi.menu_item_id = mi.id
WHERE w4_customer.id = 1
ORDER BY o.id;
\echo '************List  all orders of a particular restaurant************'
-- write your query here
SELECT r.id                             AS "Restaurant ID"
     , om.order_id                            AS "Order #"
     , mi.name                          AS "Food"
     , mi.price::float8::numeric::money AS "Price"
    FROM w4_restaurant r
    INNER JOIN w4_menu_item mi ON r.id = mi.restaurant_id
    INNER JOIN w4_order_menu_items om ON mi.id = om.menu_item_id
    WHERE r.id = 6;

