## Part 4:  ORDERING THE RESULTS OF SELECT

We have seen that the rows in the table resulting from a SELECT statement are usually in the same order as the rows in the physical table. If the DISTINCT qualifier is used, then the rows are in ascending order by the selected field or fields. Frequently you will want to order the resulting table according to some other criteria. SQL allows you to apply a specific order, based on the values in one or more fields, to the resulting table by adding the ORDER BY clause to the SELECT statement.

```sql
SELECT fieldList
    FROM tableName
    ORDER BY orderList;
```

where orderList describes how the result set is to be ordered. The simplest form of an orderList is a field name optionally followed by ASC or DESC.

To produce a list of the names of the customers and the city they live in, in alphabetical order by customer name, we construct the following statement:

```sql
SELECT CustName, City
    FROM Customer
    ORDER BY CustName;
```

We do not need to specify that the order is to be ascending, as ascending order is the default. Should you wish to make the order explicit, you may add the term ASC immediately after the column name, separated form the column name by a space. The following statement is equivalent to the previous one:

```sql
SELECT CustName, City
    FROM Customer
    ORDER BY CustName ASC;
```

When the resulting recordset is to be in descending order, you must add the term DESC after the column whose values determine the order. The following query puts the output in a descending order by customer name:

```sql
SELECT CustName, City
    FROM Customer
    ORDER BY CustName DESC;
```


