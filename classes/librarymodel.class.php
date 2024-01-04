<?php
    class LibraryModel extends Database {
        protected function addBook($b_title, $b_author, $b_category, $b_ISBN, $B_NOC, $b_details){
            $sql = "INSERT INTO book(book_isbn, book_title, book_author, number_of_copy, book_description, category_id) VALUES(?, ?, ?, ?, ?, ?);";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$b_ISBN, $b_title, $b_author, $B_NOC, $b_details, $b_category]);
        }

        protected function addCategory($cn, $cd){
            $sql = "INSERT INTO category(category_name, category_description) VALUES(?, ?);";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$cn, $cd]);
        }

        protected function addStudent($s_id, $s_name, $branch){
            $sql = "INSERT INTO student(student_id, student_name, student_branch) VALUES(?, ?, ?);";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$s_id, $s_name, $branch]);
        }

        protected function addLending($book_id, $student_id, $date_start, $date){
            $sql = "INSERT INTO book_lending(book_id, student_id, lending_start, lending_end) VALUES(?, ?, ?, ?);";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$book_id, $student_id, $date_start, $date]);
        }

        protected function getStudentId($student_id, $student_name){
            $sql = "SELECT id FROM student WHERE student_id = ? AND student_name = ? LIMIT 1;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$student_id, $student_name]);
            $s_id = $statement->fetchAll();
            return $s_id;
        }

        protected function getBookId($book_name, $book_isbn){
            $sql = "SELECT book_id FROM book WHERE book_title = ? AND book_isbn = ?  LIMIT 1 ;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$book_name, $book_isbn]);
            $bookId = $statement->fetchAll();
            return $bookId;
        }

        //             $sql = "SELECT category_id, category_name FROM category;";
        protected function getCategories(){
            $sql = "SELECT * FROM category;";
            $statement = $this->connect()->query($sql);
            $names = $statement->fetchAll();
            return $names;
        }

        protected function getBooks(){
            $sql = "SELECT * FROM book inner JOIN category ON book.category_id = category.category_id;";
            $statement = $this->connect()->query($sql);
            $books = $statement->fetchAll();
            return $books;
        }

        protected function getLending(){
            $sql = "SELECT * FROM book, student, book_lending WHERE book.book_id = book_lending.book_id AND student.id = book_lending.student_id;";
            $statement = $this->connect()->query($sql);
            $lendings = $statement->fetchAll();
            return $lendings;
        }

        protected function getSearches($search){
            $sql = "SELECT * FROM category WHERE category_name = ?;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$search]);
            $categoriesSearch = $statement->fetchAll();
            return $categoriesSearch;
        }

        protected function getBookSearches($search){
            $sql = "SELECT * FROM book WHERE book_title = ?;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$search]);
            $booksSearch = $statement->fetchAll();
            return $booksSearch;
        }

        protected function getLenderSearches($search){
            $sql = "SELECT * FROM book, student, book_lending WHERE book.book_id = book_lending.book_id AND student.student_id = book_lending.student_id AND student.student_name = ?;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$search]);
            $lendersSearch = $statement->fetchAll();
            return $lendersSearch;
        }

        protected function getSortCategory($sort){
            $sql = "SELECT * FROM category ORDER BY category_name $sort;";
            $statement = $this->connect()->query($sql);
            $categorySorted = $statement->fetchAll();
            return $categorySorted;
        }

        protected function getSortBook($sort){
            $sql = "SELECT * FROM book inner JOIN category ON book.category_id = category.category_id ORDER BY book_title $sort;";
            $statement = $this->connect()->query($sql);
            $bookSort = $statement->fetchAll();
            return $bookSort;
        }

        protected function getSortLending($sort){
            $sql = "SELECT * FROM book, student, book_lending WHERE book.book_id = book_lending.book_id AND student.id = book_lending.student_id ORDER BY $sort;";
            $statement = $this->connect()->query($sql);
            $lendersSort = $statement->fetchAll();
            return $lendersSort;
        }

        protected function deleteCategoryId($id){
            try {
                $sql = "DELETE FROM category WHERE category_id = ?;";
                $statement = $this->connect()->prepare($sql);
                $statement->execute([$id]);
            } catch (\Throwable $th) {
                $errorMsg = "<center><h1 style='padding: 8px; background-color: rgb(214, 201, 169); color: rgb(111, 65, 42); width: 90%; border-radius: 8px;'>This Category Has Some Books In It !</h1></center>";
                setcookie('Lend_error', $errorMsg, time() + 2, '/'); // $_COOKIE['Lend_error']
            }
            
        }

        protected function DeleteBookId($id){
            try {
                $sql = "DELETE FROM book WHERE book_id = ?;";
                $statement = $this->connect()->prepare($sql);
                $statement->execute([$id]);
            } catch (\Throwable $th) {
                $errorMsg = "<center><h1 style='padding: 8px; background-color: rgb(214, 201, 169); color: rgb(111, 65, 42); width: 90%; border-radius: 8px;'>This Book Is Borrow from Someone !</h1></center>";
                setcookie('book_error', $errorMsg, time() + 2, '/'); // $_COOKIE['book_error']
            }
            
        }

        protected function deleteLendingId($id){
            $sql = "DELETE FROM book_lending WHERE id = ?;";
            $statement = $this->connect()->prepare($sql);
            $statement->execute([$id]);
        }

        protected function GetAllStudents(){
            $sql = "SELECT * FROM student;";
            $statement = $this->connect()->query($sql);
            $students = $statement->fetchAll();
            return $students;
        }
    }