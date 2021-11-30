# Check if the first and last number of a list is the same
# Write a function to return True if the first and last number of a given list is same. If numbers are different
# then return False.

def check_char(numberList):
    print("Given list:", numberList)
    
    first = numberList[0]
    last = numberList[-1]
    
    if first == last:
        return True
    else:
        return False

x = [2,4,6,8,10]
print("result is", check_char(x))

y = [5,10,15,20,25,5]
print("result is", check_char(y))