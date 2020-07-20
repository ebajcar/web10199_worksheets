## Part 7:  RETRIEVING CERTAIN ROWS FROM A SINGLE TABLE

WHERE clause

The criteria to specify which records will be included in the result set is recorded in the WHERE clause. The WHERE clause comes after the FROM clause and before the ORDER BY clause:

```sql
SELECT listOfFields
    FROM tableName
    WHERE condition
    ORDER BY fieldList;
```
condition is evaluated for every row in the table named in the FROM clause and if the condition evaluates to true, that record is included in the result set.

### Relational Operators

Consider a request for only those records from the Customer table where the customer lives in Mississauga. The records we want in the result set are those where the contents of the City field are equal to the string "Mississauga".

```sql
SELECT *
    FROM Customer
    WHERE City = "Mississauga";
```

The above query illustrates the construction of a valid expression using the equality operator. SQL also provides support for the relational operators <. <=, <>, >, >=. Note that <> is the not-equal-to operator.

Unlike strings that are enclosed in quotes, dates are enclosed in pound signs (#). For example, the select query to list all those orders placed before November 1, 1997 is:

```sql
SELECT OrderDate
    FROM [Order]
    WHERE OrderDate < #11/1/1997#;
```

#### More Examples

```sql
Select * 
    From Customers 
    Where City = "Oakville";
Select * 
    From Customers 
    Where OrderDate <= #11/19/2002#;
Select * 
    from Customers 
    Where CreditLimit <= 100;
```

