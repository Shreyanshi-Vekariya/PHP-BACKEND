# Create a new list from a two list using the following condition


def merge_list(list1, list2):
    result_list = []
    

    for num in list1:
        
        if num % 2 != 0:
            
            result_list.append(num)
    
    
    for num in list2:
        
        if num % 2 == 0:
            
            result_list.append(num)
    return result_list

list1 = [1,4,3,8,12,20,26,11]
list2 = [2,6,7,12,15,20,35,50]
print("result list : ", merge_list(list1, list2))

