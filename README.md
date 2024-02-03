 php artisan storage:link
 php artisan migrate:fresh --seed

 also edit permision control for the folder 
 


 If you're using XAMPP, the PHP environment might be different from your system environment. Here's how you can add Python to your PATH in the PHP environment:

1. **Find php.ini**: The `php.ini` file is the configuration file for PHP. In XAMPP, this file is typically located in the `php` subdirectory of your XAMPP installation directory. The exact path might look something like `C:\xampp\php\php.ini`.

2. **Edit php.ini**: Open `php.ini` in a text editor. Find the line that starts with `; PATH=`, which is commented out by default. Uncomment it by removing the `;`, then add the path to your Python installation to the existing paths. It should look something like this:

    ```ini
    PATH="C:\Users\User\AppData\Local\Programs\Python\Python39\;C:\xampp\php;${PATH}"
    ```

    Remember to replace `User` with your actual username on your Windows system.

3. **Restart Apache**: Save your changes to `php.ini` and close the file. Then, restart the Apache server through the XAMPP control panel for the changes to take effect.

Now, PHP should be able to find the Python interpreter when it runs shell commands. You can test this by running a PHP script that calls a Python script.

Please note that these instructions are for a typical XAMPP setup on Windows, and actual steps might vary based on your specific configuration. Always refer to the official documentation for the most accurate and up-to-date information. Let me know if you need help with anything else!




The commands you've listed are for a Linux environment and are installing various packages using package managers like `apt` and `pip`. 

In a Windows environment, you can use `pip` for Python packages in the same way, but you'll need to use a different method to install system packages. Here's how you can install the same packages in Windows:

1. **Tesseract OCR**: You can download the binary for Windows from the [GitHub page](https://github.com/UB-Mannheim/tesseract/wiki) and install it. After installation, add the Tesseract path to your system's PATH variable.

2. **Pytesseract**: This is a Python library, you can install it using pip in your command prompt:
    ```cmd
    pip install pytesseract
    ```

3. **pdf2image**: This is also a Python library, you can install it using pip:
    ```cmd
    pip install pdf2image
    ```

4. **Poppler-utils**: Poppler for Windows can be downloaded from [this page](http://blog.alivate.com.au/poppler-windows/). After downloading, extract the files and add the bin/ directory to your system's PATH variable.

5. **sentence-transformers**: This is a Python library, you can install it using pip:
    ```cmd
    pip install -U sentence-transformers
    ```

Remember to run your command prompt as an administrator when installing these packages. Also, ensure that Python and pip are correctly installed on your system and that they are added to your system's PATH variable.

Please note that these instructions are for a typical Windows setup, and actual commands might vary based on your specific configuration. Always refer to the official documentation for the most accurate and up-to-date information. 

For Visual Studio Code, you can download it from the [official website](https://code.visualstudio.com/download) and install it. After installation, you can open it by searching for 'Visual Studio Code' in your start menu or you can open a folder directly in VS Code from the right-click context menu. 

Let me know if you need help with anything else!
