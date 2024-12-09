-- Drop tables if they already exist (for resetting purposes)
DROP TABLE IF EXISTS SMS, Activity_Log, Suggestion, Payment_List, Proof_of_Transaction, Payment_Method, Invoice, Bed_Assignment, Bed, Room, Property, Constant_Utility_Bills, Utility_Bills, Company, Role_Permission, Permission, Role, Status, Gender, Tenant, User;

-- User Table
CREATE TABLE User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Gender Table
CREATE TABLE Gender (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) UNIQUE NOT NULL -- Examples: 'Male', 'Female', 'Other'
);

-- Status Table
CREATE TABLE Status (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL, -- Examples: 'unpaid', 'partially paid'
    description TEXT,
    context VARCHAR(50) NOT NULL -- Specifies the table/entity the status applies to
);

-- Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT
);

-- Permission Table
CREATE TABLE Permission (
    id INT PRIMARY KEY AUTO_INCREMENT,
    permission_name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT
);

-- Role_Permission Table (Many-to-Many)
CREATE TABLE Role_Permission (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT,
    permission_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id),
    FOREIGN KEY (permission_id) REFERENCES Permission(id),
    UNIQUE (role_id, permission_id)
);

-- Company Table
CREATE TABLE Company (
    id INT PRIMARY KEY AUTO_INCREMENT,
    company_name VARCHAR(100) UNIQUE NOT NULL,
    address TEXT,
    contact_no VARCHAR(15),
    website VARCHAR(100),
    company_logo VARCHAR(255)
);

-- Property Table
CREATE TABLE Property (
    id INT PRIMARY KEY AUTO_INCREMENT,
    company_id INT, -- Foreign Key to Company
    property_name VARCHAR(100) NOT NULL,
    address TEXT,
    contact_no VARCHAR(15),
    FOREIGN KEY (company_id) REFERENCES Company(id)
);

-- Room Table
CREATE TABLE Room (
    id INT PRIMARY KEY AUTO_INCREMENT,
    property_id INT, -- Foreign Key to Property
    room_no VARCHAR(10) UNIQUE NOT NULL,
    room_image VARCHAR(255),
    room_description TEXT,
    FOREIGN KEY (property_id) REFERENCES Property(id)
);

-- Bed Table
CREATE TABLE Bed (
    id INT PRIMARY KEY AUTO_INCREMENT,
    property_id INT, -- Foreign Key to Property
    room_id INT, -- Foreign Key to Room
    bed_no VARCHAR(20) UNIQUE NOT NULL,
    monthly_rate DECIMAL(10, 2),
    status_id INT DEFAULT 1, -- Foreign Key to Status
    FOREIGN KEY (property_id) REFERENCES Property(id),
    FOREIGN KEY (room_id) REFERENCES Room(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Tenant Table
CREATE TABLE Tenant (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE, -- Foreign Key to User
    property_id INT, -- Foreign Key to Property
    phone VARCHAR(15),
    address TEXT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    middle_name VARCHAR(50),
    gender_id INT, -- Foreign Key to Gender
    profile_picture VARCHAR(255),
    proof_of_identity VARCHAR(255),
    status_id INT DEFAULT 1, -- Foreign Key to Status
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (property_id) REFERENCES Property(id),
    FOREIGN KEY (gender_id) REFERENCES Gender(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Bed_Assignment Table
CREATE TABLE Bed_Assignment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT, -- Foreign Key to Tenant
    bed_id INT, -- Foreign Key to Bed
    room_id INT, -- Foreign Key to Room
    property_id INT, -- Foreign Key to Property
    date_started DATE,
    due_date DATE,
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (bed_id) REFERENCES Bed(id),
    FOREIGN KEY (room_id) REFERENCES Room(id),
    FOREIGN KEY (property_id) REFERENCES Property(id)
);

-- Invoice Table
CREATE TABLE Invoice (
    id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_no VARCHAR(20) UNIQUE NOT NULL,
    date_issued DATE,
    due_date DATE,
    status_id INT DEFAULT 1, -- Foreign Key to Status
    remarks VARCHAR(100),
    amount_paid DECIMAL(10, 2),
    penalty_amount DECIMAL(10, 2),
    discount_amount DECIMAL(10, 2),
    tenant_id INT, -- Foreign Key to Tenant
    property_id INT, -- Foreign Key to Property
    user_id INT, -- Foreign Key to User (processed by)
    room_id INT, -- Foreign Key to Room
    utility_bills INT,
    constant_utility_bills INT,
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (property_id) REFERENCES Property(id),
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (room_id) REFERENCES Room(id)
);

-- Utility_Bills Table
CREATE TABLE Utility_Bills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    rate INT,
    bills_name VARCHAR(100)
);

-- Constant_Utility_Bills Table
CREATE TABLE Constant_Utility_Bills (
    id INT PRIMARY KEY AUTO_INCREMENT,
    number_of_appliances INT,
    cost DECIMAL(10, 2)
);

-- Payment_Method Table
CREATE TABLE Payment_Method (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL, -- Example: 'Credit Card'
    payment_logo VARCHAR(255),
    description TEXT
);

-- Proof_of_Transaction Table
CREATE TABLE Proof_of_Transaction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT, -- Foreign Key to Tenant
    invoice_id INT, -- Foreign Key to Invoice
    tenant_amount_paid DECIMAL(10, 2),
    date_of_payment DATE,
    proof_of_payment VARCHAR(255),
    status_id INT, -- Foreign Key to Status
    date_submitted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    reply_from_owner TEXT,
    payment_method_id INT, -- Foreign Key to Payment_Method
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (invoice_id) REFERENCES Invoice(id),
    FOREIGN KEY (status_id) REFERENCES Status(id),
    FOREIGN KEY (payment_method_id) REFERENCES Payment_Method(id)
);

-- Payment_List Table
CREATE TABLE Payment_List (
    id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_id INT, -- Foreign Key to Invoice
    processed_by_user_id INT, -- Foreign Key to User
    amount_paid DECIMAL(10, 2),
    payment_status_id INT, -- Foreign Key to Status
    payment_date DATE,
    receipt_number VARCHAR(20) UNIQUE,
    FOREIGN KEY (payment_status_id) REFERENCES Status(id),
    FOREIGN KEY (invoice_id) REFERENCES Invoice(id),
    FOREIGN KEY (processed_by_user_id) REFERENCES User(id)
);

-- Suggestion Table
CREATE TABLE Suggestion (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT, -- Foreign Key to Tenant
    property_id INT, -- Foreign Key to Property
    status_id INT DEFAULT 2, -- Foreign Key to Status
    date_issued TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    request TEXT,
    reply_from_owner TEXT,
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (property_id) REFERENCES Property(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Activity_Log Table
CREATE TABLE Activity_Log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT, -- Foreign Key to User
    property_id INT, -- Foreign Key to Property
    activity TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (property_id) REFERENCES Property(id)
);

-- SMS Table
CREATE TABLE SMS (
    id INT PRIMARY KEY AUTO_INCREMENT,
    api_code VARCHAR(100),
    api VARCHAR(255),
    set_alarm TIME,
    message TEXT
);
