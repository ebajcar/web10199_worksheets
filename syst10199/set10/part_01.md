## Part 1: The SELECT statement allows you to interrogate the database.

It allows you to specify the data you want to extract from the database. The full syntax can be quite complex and may take the following general form, where all clauses in square brackets are optional. General SELECT statement:

```sql
SELECT columns
    FROM tables
    [JOIN joins]
    [WHERE searchCondition]
    [GROUP BY groupingColumns]
    [HAVING searchCondtion]
    [ORDER BY sortColumns];
```

The simplest form of the SELECT statement consists of two clauses, a SELECT clause and a FROM clause. The general format is:

```sql
SELECT fieldList
    FROM tableName;
```

Note that this statement, like all SQL statements ends with a semicolon. The execution of these statements yields a dynaset consisting of the fields named in the fieldList pulled from the table named in the tableName.

The fields in the resulting dynaset will appear in the same order as the field names appear in the SELECT clause, regardless of the order in which they appear in the table. Thus, the query:

```sql
SELECT CustName, CreditLimit
    FROM Customer;
```

yields the same values, but in a different field order from

```sql
SELECT CreditLimit, CustName
    FROM tableName;
```

In formulating SQL queries, you need to know only the names of the tables and the fields furnishing the data. You don't need to know about the location of the data, the order of the fields in the tables, or even the data type associated with each field, at least for now. Simple queries may be formed provided you know what you want and where to get it.

More on https://www.w3schools.com/sql/sql_select.asp
