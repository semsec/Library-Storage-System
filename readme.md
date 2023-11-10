# Library Storage System

This project implements a Library Storage System, providing functionalities for managing books and authors.\
The system is designed to handle complex tasks related to book management in a library.
## Acknowledgement
We have 4 different files : 
- books.json and books.csv care storage of our books
- authors.json is list of authors
- command.json is your specified commandline. 
- You are free to choose your own request / response cycle, but don't confuse yourself with this , it can decent to be a cli-app
### Cammand.json
This file has two general keys : 1 - command_name  2 - parameters . 
I are just restricted in two keys. But for values you  are free to design your own system .
## Tasks

### Task 1: List of All Books

- Implement a paginated, filterable, and sortable list of all registered books.
- Allow users to choose the number of items per page and filter books by author.
- Enable sorting by various criteria such as title, author, and publish date.
- Implement caching mechanisms for better performance.

### Task 2: Getting a Specific Book

- Allow users to provide either format for book retrieval.
- Implement an advanced search feature for books based on multiple criteria.

### Task 3: Adding a New Book

- Be aware the ISBN format should be ISBN-13.
- Implement an authorization system with different user roles (e.g., admin, editor, contributor).
- Allow only authorized users to add new books.
- Support batch additions by allowing users to upload a CSV or JSON file with multiple new books.
- Implement a versioning system for books, allowing updates and maintaining a history of changes.

### Task 4: Deleting a Specific Book

- Implement a soft-delete mechanism instead of permanent deletion.
- Allow books to be marked as deleted but still accessible for historical purposes.
- Deleting of a book should be able by multiple criteria .

## Usage

Provide instructions on how to set up and use the Library Storage System. Include details about dependencies, installation steps, and any configuration required.

## Contributing

Explain how others can contribute to the project. Include information about code style, testing, and the contribution process.

## License

Specify the license under which the project is distributed.

## Acknowledgments

Give credit to individuals or projects that have contributed to or inspired this project.
