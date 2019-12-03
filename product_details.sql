use plant_database;

create table product_details as (
    (select plant_index.plant_id as product_id, 
            plant_index.plant_botanical as product_name,
            cost_index.cost_amount as product_cost
    from plant_index, cost_index
    where plant_index.cost_id = cost_index.cost_id)
);