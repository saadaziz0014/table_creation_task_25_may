<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("conn.php");
    $query_customer = 'create table customer(
        customer_id int primary key,
        customer_name varchar(84),
        customer_phone int,
        customer_address varchar(100)
    );';

    $result_c = mysqli_query($connect, $query_customer);

    if ($result_c) {
        echo "<h1>Customer Table Created</h1>";
    } else {
        echo "Error in Customer Table";
    }

    $query_order = 'create table orders(
        order_id int primary key,
        order_date Date,
        customer_id int not null,
        foreign key (customer_id) references customer(customer_id)
    );';

    $result_o = mysqli_query($connect, $query_order);

    if ($result_o) {
        echo "<h1>Order Table Created</h1>";
    } else {
        echo "Error in Order Table";
    }

    $query_product = 'create table product(
        product_id int primary key,
        product_name varchar(20),
        product_desc varchar(84),
        product_price int
    );';

    $result_p = mysqli_query($connect, $query_product);

    if ($result_p) {
        echo "<h1>Product Table Created</h1>";
    } else {
        echo "Error in Product Table";
    }

    $query_orderd = 'create table order_details(
        order_d_id int primary key,
        quantity int,
        order_id int not null,
        product_id int not null,
        foreign key (product_id) references product(product_id),
        foreign key (order_id) references orders(order_id)
    );';

    $result_od = mysqli_query($connect, $query_orderd);

    if ($result_od) {
        echo "<h1>Order Details Table Created</h1>";
    } else {
        echo "Error in Order Details Table";
    }

}
?>

<html>

<body>
    <form action="index.php" method="post">
        <button type="submit">Create Relations</button>
    </form>
</body>

</html>