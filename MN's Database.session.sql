-- User Table
CREATE TABLE User (
    id INT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tenant Table
CREATE TABLE Tenant (
    id INT PRIMARY KEY,
    phone VARCHAR(15),
    email VARCHAR(100),
    address TEXT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    middle_name VARCHAR(50),
    gender VARCHAR(10),
    profile_picture VARCHAR(255),
    proof_of_identity VARCHAR(255),
    status ENUM('active', 'inactive')
);

-- Role Table
CREATE TABLE Role (
    id INT PRIMARY KEY,
    role_name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT
);

-- Permission Table
CREATE TABLE Permission (
    id INT PRIMARY KEY,
    permission_name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT NOT NULL
);

-- Role_Permission Table (Many-to-Many)
CREATE TABLE Role_Permission (
    id INT PRIMARY KEY,
    role_id INT,
    permission_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id),
    FOREIGN KEY (permission_id) REFERENCES Permission(id)
);

-- Invoice Table
CREATE TABLE Invoice (
    id INT PRIMARY KEY,
    invoice_no VARCHAR(20) UNIQUE NOT NULL,
    date_issued DATE,
    due_date DATE,
    status VARCHAR(20)
    remarks VARCHAR(20),
    amount_paid INT,
    current_date DATE,
    penalty_amount DECIMAL,
    discount_amount DECIMAL,


);

-- Company Table
CREATE TABLE Company (
    id INT PRIMARY KEY,
    company_name VARCHAR(100) UNIQUE NOT NULL,
    address TEXT,
    contact_no VARCHAR(15),
    website VARCHAR(100),
    company_logo VARCHAR(255)
);

-- Bed Table
CREATE TABLE Bed (
    id INT PRIMARY KEY,
    bed_no VARCHAR(20) UNIQUE NOT NULL,
    monthly_rate DECIMAL,
    status INT(1)
);

-- Room Table
CREATE TABLE Room (
    id INT PRIMARY KEY,
    room_no VARCHAR(10) UNIQUE NOT NULL,
    room_image VARCHAR(255),
    room_description TEXT
);

-- Bed Assignment Table
CREATE TABLE Bed_Assignment (
    id INT PRIMARY KEY,
    date_started DATE,
    due_date DATE

);

-- Payment Table
CREATE TABLE Payment (
    id INT PRIMARY KEY,
    payment_amount DECIMAL(10, 2),
    amount_paid DECIMAL(10, 2),
    processed_by int(11),
    date DATE,
    receipt_number VARCHAR(15),
    status INT(1)
    proof_of_payment VARCHAR(255)
);

-- Suggestion Table
CREATE TABLE Suggestion (
    id INT PRIMARY KEY,
    status ENUM('solved', 'pending') NOT NULL,
    date_issued TIMESTAMP,
    request TEXT,
    reply_from_owner TEXT
);

-- User List Table
CREATE TABLE User_List (
    id INT PRIMARY KEY
    last_active TIMESTAMP,
    status ENUM('active', 'inactive')
    
);

-- Activity Log Table
CREATE TABLE Activity_Log (
    id INT PRIMARY KEY,
    user_id INT,
    activity TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

CREATE TABLE SMS (
    id INT PRIMARY KEY,
    api code VARCHAR,
    api VARCHAR,
    set_alarm TIME,
    Message TEXT,

)

CREATE TABLE Proof_of_Transaction {
    id INT PRIMARY KEY,
    tenant_amount_paid DECIMAL,
    date_of_payment DATE,
    proof_of_payment VARCHAR(255),

}

CREATE TABLE Payment Method {
    id INT PRIMARY KEY,
    name VARCHAR,
    description TEXT,
    
}

-- Table for storing the finalized payment history
CREATE TABLE Payment_History (
    id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_id INT,       -- Link to the relevant invoice
    amount_paid DECIMAL(10, 2),  -- Final amount paid for this transaction
    payment_date DATE,    -- Date when the payment was finalized
    payment_method_id INT,  -- Reference to the payment method used
    proof_id INT,         -- Reference to the approved Proof_of_Transaction record
    processed_by INT,     -- Admin or user who processed this payment (Foreign Key to User)

    FOREIGN KEY (invoice_id) REFERENCES Invoice(id),
    FOREIGN KEY (payment_method_id) REFERENCES Payment_Method(id),
    FOREIGN KEY (proof_id) REFERENCES Proof_of_Transaction(id),
    FOREIGN KEY (processed_by) REFERENCES User(id)
);

-- Relationships --

tenant belongs to user
user has one tenant
tenant has many Suggestion
suggestion belongs to tenant
tenant has many invoice 
tenant has one bed assignment
bed assignment belongs to tenant
invoice belongs to tenant
invoice has many proof of transaction
proof of transaction belongs to invoice
invoice has one company
company belongs to invoice
invoice has one user
user belongs to invoice
room has many bed management
bed management belongs to room
room has many assign beds
bed assignment belongs to room
room has many invoice
invoice belongs to room
invoice has one payment
payment belongs to invoice
user has one role
role belongs to user
user list has many user
user belongs to user list
role has many role permission
role permission belongs to role
permission has many role
role permission belongs to role permission
