# Arrange string characters such that lowercase letters should come first
# Given string contains a combination of the lower and upper case letters. Write a program to arrange the
# characters of a string so that all lowercase letters should come first.

str1 = "PYnAtivE"
print('Original String:', str1)
lower = []
upper = []
for char in str1:
    if char.islower():
        
        lower.append(char)
    else:
        
        upper.append(char)

sorted_str = ''.join(lower + upper)
print('Result:', sorted_str)