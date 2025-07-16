# Simple PHP Visitor Counter

This small PHP script enables counting visitors on a website by storing the visitor count in a text file (`count.txt`). The file is locked using `flock()` to avoid issues with simultaneous access (race conditions).

## Features

- Simple PHP script, easy to integrate into existing websites  
- Prevents write conflicts through file locking  
- No database required, purely file-based  
- Suitable for small to medium websites and blogs (e.g. HTMLy)

## Installation

1. Upload the files `counter.php` and an empty file `count.txt` to your webspace (e.g. Strato).  
2. Make sure `count.txt` is writable (e.g. adjust file permissions).  
3. Include the counter in your website using PHP, e.g.:

<?php include('pfad/zu/counter.php'); ?>

4. Visit your website and the counter will automatically increment the visitor count.

## Notes

- Ideally, `count.txt` should be located outside the web root or protected by `.htaccess` so that nobody can directly modify the file.  
- The counter counts every page request, including bots and reloads. For more refined counting, additional mechanisms (cookies, user-agent filtering) would need to be added.

## License

MIT License – see LICENSE file.

