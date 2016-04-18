PHP version: 5.6.20
	This is the versioin that my Fedora dnf/yum command happened to pull down.
5.6.20 is the version I was using when writing repeatiest-word. I do not believe
I did anything to prevent this from running on later versions, but as I am not a
PHP expert, I cannot be perfectly sure.

Running repeatiest-word:
Set your working directory to the project directory "repeatiest-word"
	
	# php src/repeatiest-word.php FILE

A more memory optimal solution might have paid more attention to dropping 
references to objects such as words and portions of the text that have been
passed. However, if you would like to run this against a large text, such as
20,000 Leagues Under the Sea as available here
http://www.textfiles.com/etext/FICTION/ (note that there is some kind of preface
about the source of the book that contains the string "xxxx". I just edited the
file to remove that weird part of the preface and then was able to run it with the
following

	# php -d memory_limit=450M src/repeatiest-word.php FILE
