# Minuteman-Press-Sample-PHP-Project

1. Create a PHP web application.
2. Build a webpage with an HTML form to collect job application details, including name, email, and resume file upload.
3. Validate the form data on the client-side using JavaScript:
   a. Ensure that the name is not empty.
   b. Verify that the email is in a valid format.
   c. Check if a resume file is selected and within a valid file format.
4. If client-side validation fails, display error messages to the user.
5. If client-side validation passes, proceed to the server-side processing.

Server-side PHP code:

6. Receive the form data when the user submits the form.
7. Validate the form data on the server-side:
   a. Ensure that the name is not empty.
   b. Verify that the email is in a valid format.
   c. Check if a resume file is uploaded and within a valid file format.
8. If server-side validation fails, display error messages to the user.
9. If server-side validation passes, proceed to the database and email handling.

Database handling (MySQL):

10. Connect to the MySQL database.
11. Insert the validated job application details (name, email, and resume path) into the 'job_applications' table.
12. Close the database connection.

Email notification:

13. Send an alert email to the site admin with the submitted job application details:
   a. Use PHP's mail function or a third-party library for sending emails.
   b. Include the name, email, and a link to the uploaded resume in the email.

Thanking the user:

14. Display a "Thank you" message to the user on the webpage to confirm the successful submission.
