# Calculate income tax for the given income by adhering to the below rules
# Taxable Income Rate (in %)
# First $10,000 0
# Next $10,000 10
# The remaining 20

income = 45000
tax = 0
print("Given income", income)

if income <= 10000:
    tax = 0
elif income <= 20000:
    
    x = income - 10000
    
    tax = x * 10 / 100
else:
    
    tax = 0

    
    tax = 10000 * 10 / 100

    
    tax += (income - 20000) * 20 / 100

print("Total tax to pay is", tax)