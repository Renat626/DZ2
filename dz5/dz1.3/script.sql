USE product;

SELECT * FROM storehouses_products
  ORDER BY CASE WHEN price = 0 THEN 2147483647 ELSE price END