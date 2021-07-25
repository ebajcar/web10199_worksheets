## Part 5: ORDERING ON MULTIPLE FIELDS

Suppose you are asked to list the names of all customers in the database in alphabetical order within city of residence. A question to be answered is "What is the primary field for sorting?" The answer is the city of residence. The following query supplies the answer.

```sql
SELECT CustName, City
    FROM Customer
    ORDER BY City, CustName;
```

In the ORDER BY clause, the first named field is the first sort key, the second named field is the second sort key, etc.

If the request is for customer names in alphabetical order, ascending order, within city in reverse alphabetical order, descending order, then we must insert DESC after City in the ORDER BY clause.

```sql
SELECT CustName, City
    FROM Customer
    ORDER BY City DESC, CustName;
```

Note that in ORDER BY clause the comma separating the two fields comes after the DESC keyword. The rows in the original table are unaffected by the query.
