SELECT 
    d.name, 
    COUNT(e.id)  -- On compte les ID employés (donne 0 si null)
FROM 
    departments d
LEFT JOIN 
    employees e ON d.id = e.department_id
GROUP BY 
    d.name       -- Obligatoire car on utilise une fonction de groupe (COUNT)