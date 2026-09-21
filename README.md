
## project title: caafi pharmacy 
## business problem : 
Problem — don't know what's running low and medicines expire unnoticed.


## Users — 
User will be the owner for admin and staff for daily tasks.




## Features —
1: add a new medicine to the system
2: update the quantity of a medicine (e.g. when new stock arrives or when a customer buys some)
3: remove a medicine from the system (e.g. if it is discontinued)
4: view a list of all medicines in stock, including their quantities and expiration dates   



## Business rules — 
rule 1: Stock cannot go negative. If a customer tries to buy more than is in stock, the system should prevent the sale and notify the staff.
rule 2: Low stock is defined as any medicine with a quantity of 5 or    less. The system should flag these medicines so the owner can reorder them.
rule 3: Expiring soon is defined as any medicine that will expire within the next 30 days. The system should flag these medicines so the owner can take action (e.g. return them to the supplier or put them on sale).



## Entities —  "
entity 1: Stock
entity 2: category




## Tables — columns

table 1: Stock — id, medicine_id, quantity, producation date , expire date , created_at, updated_at 
table 2: category — id, name, created_at, updated_at


## Relationships — between tables 

relationship 1: sales belongs to stock (many-to-one)
relationship 2: category has many stock (one-to-many)



