# Linux CLI Notes

A personal cheat sheet for Linux command line essentials.  
Organised by topic, with commands, descriptions, and examples.  
Updated as I progress through *The Linux Command Line* book.

---

## Navigation
- **cd** – Change directory  
  ```bash
  cd ..         # go up one directory
  cd /etc       # go to /etc
  cd /usr/bin   # go to /usr/bin
  cd ~ 			# go to current users home
  cd ~$USER     # go to specified user home
  ```

- **ls** – list directories and files
  ```bash
  ls -l   		# long list format
  ls -la  		# include hidden files
  ls -li  		# show inode numbers
  ```

- **pwd** – print current directory
  ```bash
  pwd 			# prints the current (working) directory
  ```
  
## File Control and Manipulation
- **mkdir** – create a directory
  ```bash
  mkdir (name)	# creates a new directory with a given name
  ```
- **touch** – create a file 
  ```bash
  touch (name) 	# creates a new file with a given name
  ```
- **rm** – removes files/directories 
  ```bash
  rm (name)    	# deletes files/directories 
  ```
- **nano** – opens a file in a text editor
  ```bash
  nano (name)  	# opens a file in a text editor. creates one if !file
  ```
- **cp** – make a copy of a file or directory
  ```bash
  cp src dest  	# copy files/directory 
  ```
- **mv** – opens a file in a text editor
  ```bash
  mv old new  	# opens a file in a text editor. creates one if !file
  ```

  
## Searching
- **find** – find a file or directory on the host machine
  ```bash
  find 					# will search for a directory and or File
	Options - find 'dir'
			- find file 
			- find dir file 
  ```
- **grep** – find matching strings 
  ```bash
  grep 							# find matching strings in a file or directory name, as well as matching strings in a files content
  grep -i 						# ignore case sensitivity
  grep -r text dir				# search recursively in directory
  ```


## Linking
- **ln** – create a link 
  ```bash
  ln link_file link_to_file		 # creates a hard link 
  ln -s /path/target symlink-name		# creates a symbolic link
  ```

## Output and Redirection
- **>** – Redirect stdout to file (overwrite) 
  ```bash
  cat /path/target > output.txt
  ````
  
- **>>** – Redirect stdout to file (append) 
  ```bash
  cat /path/target >> output.txt
  ````
  
- **2>** – Redirect stderr (overwrite) 
  ```bash
  cat /path/target 2> errors.txt
  ````
  
- **2>>** – Redirect stderr (append) 
  ```bash
  cat /path/target 2>> errors.txt
  ```
  
- **&>** – Redirect stdout and stderr (overwrite) 

  
- **|** – Pipe output to another command
  ```bash
  cat file | grep string | wc 
  ````
  
- **tee** – Write to file and stdout
  ```bash
  cat file | tee | grep string | 
  ````
  
## Help & Documentation

- **man** – Manual pages

1 = user commands

2 = system calls

3 = C library functions

4 = special files (device nodes, drivers)

5 = file formats

6 = games

7 = misc

8 = admin commands

whatis – One line descriptor
  