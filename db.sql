-- table of suppiler

CREATE TABLE suppliers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    companyName VARCHAR(255) NOT NULL,
    gstin VARCHAR(255),
    contactNo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    industryType VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    companyType VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    industry VARCHAR(255),
    product_name VARCHAR(255),
    city VARCHAR(255),
    min_order_quantity VARCHAR(255),
    scrap_source VARCHAR(255),
    packaging_size VARCHAR(255),
    material VARCHAR(255),
    thickness VARCHAR(255),
    color VARCHAR(255),
    price VARCHAR(255),
    delivery_by VARCHAR(255),
    other_details TEXT,
    product_image_path VARCHAR(255) -- Assuming the file path can be stored in 255 characters, adjust if necessary
);
CREATE TABLE PlasticScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

CREATE TABLE ElectroScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

INSERT INTO ElectroScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity)
VALUES
    (1, 'Electro Product 1', 12.50, 'Silver', 'Electronics Store 1', '0.5mm', 'Small', 'Copper', 100),
    (1, 'Electro Product 2', 15.75, 'Gold', 'Electronics Store 2', '1mm', 'Medium', 'Aluminum', 50),
    (1, 'Electro Product 3', 10.20, 'Green', 'Electronics Store 3', '0.8mm', 'Large', 'Steel', 200),
    (1, 'Electro Product 4', 8.90, 'Blue', 'Electronics Store 4', '0.6mm', 'Small', 'Copper', 150),
    (1, 'Electro Product 5', 18.60, 'Red', 'Electronics Store 5', '1.2mm', 'Medium', 'Aluminum', 80),
    (1, 'Electro Product 6', 14.30, 'Black', 'Electronics Store 6', '1.5mm', 'Large', 'Steel', 120),
    (1, 'Electro Product 7', 11.80, 'Yellow', 'Electronics Store 7', '1.0mm', 'Small', 'Copper', 90),
    (1, 'Electro Product 8', 9.75, 'White', 'Electronics Store 8', '0.7mm', 'Medium', 'Aluminum', 60);

ALTER TABLE ElectroScrap
ADD COLUMN image VARCHAR(255);

INSERT INTO ElectroScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Electro Product 1', 12.50, 'Silver', 'Electronics Store 1', '0.5mm', 'Small', 'Copper', 100, 'image1.jpg'),
    (1, 'Electro Product 2', 15.75, 'Gold', 'Electronics Store 2', '1mm', 'Medium', 'Aluminum', 50, 'image2.jpg'),
    -- ... (other rows with image values)
    (1, 'Electro Product 8', 9.75, 'White', 'Electronics Store 8', '0.7mm', 'Medium', 'Aluminum', 60, 'image8.jpg');


CREATE TABLE CeraScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);
INSERT INTO CeraScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Cera Product 1', 11.50, 'Brown', 'Ceramics Store 1', '2mm', 'Small', 'Ceramic', 100, 'image1.jpg'),
    (1, 'Cera Product 2', 14.75, 'White', 'Ceramics Store 1', '3mm', 'Medium', 'Porcelain', 50, 'image2.jpg'),
    (1, 'Cera Product 3', 9.20, 'Blue', 'Ceramics Store 1', '1.5mm', 'Large', 'Terracotta', 200, 'image3.jpg'),
    (1, 'Cera Product 4', 7.90, 'Green', 'Ceramics Store 1', '1mm', 'Small', 'Ceramic', 150, 'image4.jpg'),
    (1, 'Cera Product 5', 17.60, 'Red', 'Ceramics Store 1', '2.5mm', 'Medium', 'Porcelain', 80, 'image5.jpg'),
    (1, 'Cera Product 6', 13.30, 'Yellow', 'Ceramics Store 1', '2mm', 'Large', 'Terracotta', 120, 'image6.jpg'),
    (1, 'Cera Product 7', 10.80, 'Black', 'Ceramics Store 1', '1.8mm', 'Small', 'Ceramic', 90, 'image7.jpg'),
    (1, 'Cera Product 8', 8.75, 'Gray', 'Ceramics Store 1', '1.2mm', 'Medium', 'Porcelain', 60, 'image8.jpg');
CREATE TABLE WoodScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);
INSERT INTO WoodScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Cera Product 1', 11.50, 'Brown', 'Ceramics Store 1', '2mm', 'Small', 'Ceramic', 100, 'image1.jpg'),
    (1, 'Cera Product 2', 14.75, 'White', 'Ceramics Store 1', '3mm', 'Medium', 'Porcelain', 50, 'image2.jpg'),
    (1, 'Cera Product 3', 9.20, 'Blue', 'Ceramics Store 1', '1.5mm', 'Large', 'Terracotta', 200, 'image3.jpg'),
    (1, 'Cera Product 4', 7.90, 'Green', 'Ceramics Store 1', '1mm', 'Small', 'Ceramic', 150, 'image4.jpg'),
    (1, 'Cera Product 5', 17.60, 'Red', 'Ceramics Store 1', '2.5mm', 'Medium', 'Porcelain', 80, 'image5.jpg'),
    (1, 'Cera Product 6', 13.30, 'Yellow', 'Ceramics Store 1', '2mm', 'Large', 'Terracotta', 120, 'image6.jpg'),
    (1, 'Cera Product 7', 10.80, 'Black', 'Ceramics Store 1', '1.8mm', 'Small', 'Ceramic', 90, 'image7.jpg'),
    (1, 'Cera Product 8', 8.75, 'Gray', 'Ceramics Store 1', '1.2mm', 'Medium', 'Porcelain', 60, 'image8.jpg');

-- table for fabric Scrap 
CREATE TABLE FabScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);
INSERT INTO FabScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Fab Product 1', 15.50, 'Red', 'Fabric Store 1', '0.8mm', 'Small', 'Cotton', 100, 'fab_image1.jpg'),
    (1, 'Fab Product 2', 18.75, 'Blue', 'Fabric Store 1', '1mm', 'Medium', 'Polyester', 50, 'fab_image2.jpg'),
    (1, 'Fab Product 3', 12.20, 'Green', 'Fabric Store 1', '0.5mm', 'Large', 'Silk', 200, 'fab_image3.jpg');
CREATE TABLE GlassScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

CREATE TABLE GlassScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

INSERT INTO GlassScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Glass Product 1', 14.50, 'Clear', 'Glass Supplier 1', '2mm', 'Small', 'Recycled Glass', 100, 'glass_image1.jpg'),
    (1, 'Glass Product 2', 16.75, 'Green', 'Glass Supplier 2', '3mm', 'Medium', 'Tempered Glass', 50, 'glass_image2.jpg'),
    (1, 'Glass Product 3', 11.20, 'Blue', 'Glass Supplier 3', '1.5mm', 'Large', 'Stained Glass', 200, 'glass_image3.jpg'),
    (1, 'Glass Product 4', 9.90, 'Amber', 'Glass Supplier 4', '1mm', 'Small', 'Fused Glass', 150, 'glass_image4.jpg'),
    (1, 'Glass Product 5', 19.60, 'Red', 'Glass Supplier 5', '2.5mm', 'Medium', 'Float Glass', 80, 'glass_image5.jpg'),
    (1, 'Glass Product 6', 13.30, 'Yellow', 'Glass Supplier 6', '2mm', 'Large', 'Ceramic Glass', 120, 'glass_image6.jpg'),
    (1, 'Glass Product 7', 15.80, 'Black', 'Glass Supplier 7', '1.8mm', 'Small', 'Mirror Glass', 90, 'glass_image7.jpg'),
    (1, 'Glass Product 8', 12.75, 'White', 'Glass Supplier 8', '1.2mm', 'Medium', 'Safety Glass', 60, 'glass_image8.jpg');
CREATE TABLE PaperScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

INSERT INTO PaperScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Paper Product 1', 8.50, 'White', 'Paper Supplier 1', '0.2mm', 'Small', 'Recycled Paper', 100, 'paper_image1.jpg'),
    (1, 'Paper Product 2', 10.75, 'Brown', 'Paper Supplier 1', '0.3mm', 'Medium', 'Kraft Paper', 50, 'paper_image2.jpg'),
    (1, 'Paper Product 3', 7.20, 'Green', 'Paper Supplier 1', '0.15mm', 'Large', 'Cardboard', 200, 'paper_image3.jpg'),
    (1, 'Paper Product 4', 6.90, 'Blue', 'Paper Supplier 1', '0.25mm', 'Small', 'Newsprint', 150, 'paper_image4.jpg'),
    (1, 'Paper Product 5', 14.60, 'Red', 'Paper Supplier 1', '0.18mm', 'Medium', 'Coated Paper', 80, 'paper_image5.jpg'),
    (1, 'Paper Product 6', 11.30, 'Yellow', 'Paper Supplier 1', '0.22mm', 'Large', 'Tissue Paper', 120, 'paper_image6.jpg'),
    (1, 'Paper Product 7', 9.80, 'Black', 'Paper Supplier 1', '0.2mm', 'Small', 'Recycled Paper', 90, 'paper_image7.jpg'),
    (1, 'Paper Product 8', 8.75, 'Gray', 'Paper Supplier 1', '0.15mm', 'Medium', 'Kraft Paper', 60, 'paper_image8.jpg');
CREATE TABLE MetalScrap (
    id INT PRIMARY KEY AUTO_INCREMENT,
    supplier_id INT,
    productName VARCHAR(255),
    pricePerKg DECIMAL(10, 2),
    color VARCHAR(50),
    source VARCHAR(255),
    thickness VARCHAR(20),
    packagingSize VARCHAR(20),
    material VARCHAR(50),
    minOrderQuantity INT,
    image VARCHAR(255),
    FOREIGN KEY (supplier_id) REFERENCES suppliers(id)
);

INSERT INTO MetalScrap (supplier_id, productName, pricePerKg, color, source, thickness, packagingSize, material, minOrderQuantity, image)
VALUES
    (1, 'Metal Product 1', 15.50, 'Silver', 'Metal Supplier 1', '2mm', 'Small', 'Aluminum', 100, 'metal_image1.jpg'),
    (1, 'Metal Product 2', 18.75, 'Gold', 'Metal Supplier 1', '3mm', 'Medium', 'Brass', 50, 'metal_image2.jpg'),
    (1, 'Metal Product 3', 12.20, 'Bronze', 'Metal Supplier 1', '1.5mm', 'Large', 'Copper', 200, 'metal_image3.jpg'),
    (1, 'Metal Product 4', 10.90, 'Black', 'Metal Supplier 1', '1mm', 'Small', 'Stainless Steel', 150, 'metal_image4.jpg'),
    (1, 'Metal Product 5', 20.60, 'Red', 'Metal Supplier 1', '1.8mm', 'Medium', 'Titanium', 80, 'metal_image5.jpg'),
    (1, 'Metal Product 6', 16.30, 'Green', 'Metal Supplier 1', '2.5mm', 'Large', 'Zinc', 120, 'metal_image6.jpg'),
    (1, 'Metal Product 7', 13.80, 'Blue', 'Metal Supplier 1', '2mm', 'Small', 'Aluminum', 90, 'metal_image7.jpg'),
    (1, 'Metal Product 8', 11.75, 'White', 'Metal Supplier 1', '1.5mm', 'Medium', 'Brass', 60, 'metal_image8.jpg');
