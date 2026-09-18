
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
entity 2: sales




## Tables — columns

table 1: Stock — id, medicine_id, quantity, producation date , expire date , created_at, updated_at 
table 2: Sales — id, medicine_id, customer_id,customer_name, quantity_sold, sale_date, created_at, updated_at


## Relationships — between tables 

relationship 1: sales belongs to stock (many-to-one)
relationship 2: stock has many sales (one-to-many)  







## 1. What's good

- You correctly split "notebook tracking" into two real problems: **visibility into low stock** and **visibility into expiry**. That's exactly the hidden second problem I was hinting at.
- Your business rules are specific and measurable (quantity ≤ 5, expires within 30 days) — not vague. That's exactly how a real spec should read.
- You separated Medicines from Stock instead of just cramming everything into one table — shows you're thinking about entities, not just "one big table."

## 2. Problems (well — things to reconsider)

A few questions before we lock this in:

**Question 1 — Scope.** Look back at the original problem statement. The owner's pain points were: *"don't know what's running low"* and *"medicines expire unnoticed."* Nowhere did the owner mention selling to customers, recording sales transactions, or managing suppliers formally.

You added `Customers`, `Sales`, and `Suppliers` tables, plus user roles (admin/staff).

> Given that Project 1 in your portfolio plan is supposed to be **"Level 1 — Simple CRUD,"** and authentication/roles is explicitly **Level 3**, and a Sales/payment system is closer to **Level 6 (Mini POS)** on your own project list — do you think all of this belongs in Project 1? What would you cut to get to a true *MVP*?

Think about it in terms of Phase 2 from the workflow: **MVP features vs Non-MVP features.** Right now everything you listed is treated as equally necessary. It isn't.

**Question 2 — Medicines ↔ Stock as two tables.** You made this a one-to-one relationship. In Laravel/database design, when two tables always have exactly one record each and are always used together, that's usually a signal.

> Why did you split `quantity` into its own `Stock` table instead of just adding a `quantity` column directly onto `Medicines`? What advantage does the separate table give you here?

I want your reasoning, not just "seemed right."

**Question 3 — Where does "stock cannot go negative" actually get enforced?** You wrote it as a business rule, which is correct — but a business rule needs a *home* in the architecture.

> If a staff member tries to record a sale of 10 units when only 3 are in stock, which part of a Laravel app would be responsible for catching that and stopping it?

Don't answer with code yet — just tell me *which layer* (you'll learn the exact mechanism later).

## 3. Your task right now

Don't touch code. Instead, rewrite your **Entities/Tables** section into two lists:

```
MVP (Project 1):
- ...

Non-MVP (maybe Project 6 "Mini POS" later):
- ...
```

And answer Questions 1–3 above in your own words.

Send that back to me and we'll finalize the database design before touching `php artisan`.