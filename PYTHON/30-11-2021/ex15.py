# Remove all occurrences of a specific item from a list.
# Given a Python list, write a program to remove all occurrences of item 20.

list1 = [5, 20, 15, 20, 25, 50, 20]

def remove_val(sample, val):
    return [i for i in sample if i != val]

res = remove_val(list1, 20)
print(res)