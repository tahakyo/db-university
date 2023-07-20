**Title: db-university**

**Description:**
This repository contains the database schema and data for a university management system. It includes tables for students, courses, professors, departments, and their relationships. The database schema is implemented using SQL, and sample data is provided to illustrate its usage.

**Usage:**
To use this database schema and data in your system, follow these steps:

1. Clone the repository using the command:
   ```
   git clone https://github.com/tahakyo/db-university.git
   ```

2. Access the repository folder:
   ```
   cd db-university
   ```

3. Open the SQL file `university.sql` in your preferred database management system (DBMS), such as MySQL, SQLite, or PostgreSQL.

4. Execute the SQL statements in the file to create the necessary tables and relationships in your DBMS.

5. [Optional] Load the provided sample data by executing the SQL statements in the file `sample-data.sql`. This will populate the tables with example records for testing and experimentation purposes.

**Database Schema:**
The database schema consists of the following tables:

- **students**: Stores information about the university students, including their unique identifier, name, enrollment date, and department.
- **courses**: Contains details about the courses offered by the university, such as the course ID, title, credits, and department.
- **professors**: Stores information about the professors teaching at the university, including their unique identifier, name, department, and position.
- **departments**: Contains details about the departments within the university, including their ID, name, and location.

Additionally, the schema defines various relationships between these tables. For example, a student is associated with a department, a course is associated with a department, and a professor is associated with a department.

**Sample Data:**
The repository provides optional sample data to populate the tables for testing purposes. The `sample-data.sql` file includes INSERT statements that insert example records into the tables, demonstrating how the schema and relationships can be utilized.

**Contributing:**
Contributions to improve the database schema, files, or documentation are welcome. If you find any issues with the repository or have any suggestions for enhancements, please feel free to open an issue or submit a pull request.

**License:**
This repository is licensed under the [MIT License](https://github.com/tahakyo/db-university/blob/master/LICENSE).

**Acknowledgments:**
This project was inspired by the needs of a fictional university management system and is intended for educational purposes.
