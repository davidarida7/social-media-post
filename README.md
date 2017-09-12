# Social Media Post
This is a small program written in PHP that allows you to post to multiple social media platforms at the same time.
Until APIs for other social media outlets are updated and not blocked out, this code allows you to post to Instagram and an Instagram story at the same time.

## Setup
On whatever directory you choose on your local machine to clone this repository, execute the following command in a terminal. **__(Note: The command below assumes you have composer installed.)__**
```sh
composer require mgp25/instagram-php dev-master
```
This makes use of the PHP wrapper from [this repository](https://github.com/mgp25/Instagram-API).
Afterward, create two local files in the same directory, "username.txt" and "password.txt", with "username.txt" containing your Instagram username and "password.txt" containing your Instagram password.

## Execution
To run the program, just execute the following command in a terminal in the directory where you cloned the Git repository. **__(Note: The command below assumes you have PHP installed.)__**
```sh
php post_to_ig.php
```