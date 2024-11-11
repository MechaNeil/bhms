-- User Table
CREATE TABLE User (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,  -- Removed 'email' from Tenant to prevent redundancy
    password VARCHAR(255) NOT NULL,      -- Supports longer hashed passwords
    avatar VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tenant Table
CREATE TABLE Tenant (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE,                -- Foreign Key to User
    phone VARCHAR(15),
    address TEXT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    middle_name VARCHAR(50),
    gender_id INT,                     -- Replaced ENUM 'gender' with a foreign key to Gender table
    profile_picture VARCHAR(255),
    proof_of_identity VARCHAR(255),
    status_id INT DEFAULT 1,           -- Replaced ENUM 'status' with a foreign key to Status table
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (gender_id) REFERENCES Gender(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Gender Reference Table
CREATE TABLE Gender (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20) UNIQUE NOT NULL    -- Examples: 'Male', 'Female', 'Other'
);

-- Status Reference Table
CREATE TABLE Status (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL,  -- Status name (e.g., "unpaid", "partially paid")
    description TEXT,                  -- Optional: description of the status
    context VARCHAR(50) NOT NULL       -- Specifies which table/entity the status applies to (e.g., "invoice", "payment")
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
    description TEXT NOT NULL
);

-- Role_Permission Table (Many-to-Many)
CREATE TABLE Role_Permission (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT,
    permission_id INT,
    FOREIGN KEY (role_id) REFERENCES Role(id),
    FOREIGN KEY (permission_id) REFERENCES Permission(id),
    UNIQUE (role_id, permission_id)     -- Added unique constraint to avoid duplicate entries
);

-- Invoice Table
CREATE TABLE Invoice (
    id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_no VARCHAR(20) UNIQUE NOT NULL,
    date_issued DATE,
    due_date DATE,
    status_id INT DEFAULT 1,            -- Replaced ENUM 'status' with a foreign key to Status table
    remarks VARCHAR(100),
    amount_paid DECIMAL(10, 2),
    penalty_amount DECIMAL(10, 2),
    discount_amount DECIMAL(10, 2),
    tenant_id INT,                      -- Foreign Key to Tenant
    company_id INT,                     -- Foreign Key to Company
    user_id INT,                        -- Foreign Key to User (processed by)
    room_id INT,                        -- Foreign Key to Room
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (company_id) REFERENCES Company(id),
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (room_id) REFERENCES Room(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
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

-- Bed Table
CREATE TABLE Bed (
    id INT PRIMARY KEY AUTO_INCREMENT,
    bed_no VARCHAR(20) UNIQUE NOT NULL,
    monthly_rate DECIMAL(10, 2),
    status_id INT DEFAULT 1,            -- Replaced status TINYINT with foreign key to Status table
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Room Table
CREATE TABLE Room (
    id INT PRIMARY KEY AUTO_INCREMENT,
    room_no VARCHAR(10) UNIQUE NOT NULL,
    room_image VARCHAR(255),
    room_description TEXT
);

-- Bed_Assignment Table
CREATE TABLE Bed_Assignment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT,                      -- Foreign Key to Tenant
    bed_id INT,                         -- Foreign Key to Bed
    room_id INT,                        -- Foreign Key to Room
    date_started DATE,
    due_date DATE,
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (bed_id) REFERENCES Bed(id),
    FOREIGN KEY (room_id) REFERENCES Room(id)
);



-- Suggestion Table
CREATE TABLE Suggestion (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT,                      -- Foreign Key to Tenant
    status_id INT DEFAULT 2,            -- Replaced ENUM 'status' with a foreign key to Status table
    date_issued TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    request TEXT,
    reply_from_owner TEXT,
    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);

-- Activity_Log Table
CREATE TABLE Activity_Log (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,                        -- Foreign Key to User
    activity TEXT,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES User(id)
);

-- SMS Table
CREATE TABLE SMS (
    id INT PRIMARY KEY AUTO_INCREMENT,
    api_code VARCHAR(100),
    api VARCHAR(255),
    set_alarm TIME,
    message TEXT
);

-- Table for storing proof of transactions provided by tenants
CREATE TABLE Proof_of_Transaction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tenant_id INT,                         -- Foreign Key to Tenant (who provided proof)
    invoice_id INT,                        -- Foreign Key to Invoice (which invoice this relates to)
    tenant_amount_paid DECIMAL(10, 2),     -- Amount tenant claims to have paid
    date_of_payment DATE,                  -- Date when tenant made the payment
    proof_of_payment VARCHAR(255),         -- File path or URL to proof document
    status_id INT,                         -- Admin approval status
    date_submitted TIMESTAMP DEFAULT CURRENT_TIMESTAMP,  -- Submission timestamp
    reply_from_owner TEXT,                 -- Owner's response (e.g., reasons for rejection)

    FOREIGN KEY (tenant_id) REFERENCES Tenant(id),
    FOREIGN KEY (invoice_id) REFERENCES Invoice(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)        -- Reference to Status table (e.g., approved, rejected)
);


-- Table for defining different payment methods (like bank transfer, credit card, etc.)
CREATE TABLE Payment_Method (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL UNIQUE,  -- Name of the payment method (e.g., "Credit Card")
    description TEXT  -- Description of the payment method for reference
);

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
-- Payment Table
CREATE TABLE Payment (
    id INT PRIMARY KEY AUTO_INCREMENT,
    invoice_id INT,                     -- Foreign Key to Invoice
    payment_amount DECIMAL(10, 2),
    processed_by INT,                   -- Foreign Key to User
    date DATE,
    receipt_number VARCHAR(20) UNIQUE,
    status_id INT DEFAULT 0,            -- Replaced TINYINT status with a foreign key to Status table
    proof_of_payment VARCHAR(255),
    FOREIGN KEY (invoice_id) REFERENCES Invoice(id),
    FOREIGN KEY (processed_by) REFERENCES User(id),
    FOREIGN KEY (status_id) REFERENCES Status(id)
);