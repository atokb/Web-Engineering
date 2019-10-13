-- Table: public.body_building

-- DROP TABLE public.body_building;

CREATE TABLE body_building (
    "body_buildingID" serial PRIMARY KEY,
    "body_building_desc" VARCHAR     
);

CREATE TABLE weight_loss (
    "weight_lossID" serial PRIMARY KEY,
    "weight_loss_desc" VARCHAR     
);

CREATE TABLE healthy_living (
    "healthy_livingID" serial PRIMARY KEY,
    "healthy_living_desc" VARCHAR     
);

CREATE TABLE routines (
    "routineID" serial PRIMARY KEY,
    "routine_name" VARCHAR,
    "routine_instruction" VARCHAR    
);

CREATE TABLE weight_category (
    "weightID" serial PRIMARY KEY,
    "category" text
);

CREATE TABLE goals (
    "goalsID" serial PRIMARY KEY,
    "weight_lossID" integer REFERENCES weight_loss ("weight_lossID"),
    "body_buildingID" integer REFERENCES body_building ("body_buildingID"),
    "healthy_livingID" integer REFERENCES healthy_living ("healthy_livingID") 
);

CREATE TABLE users (
    "userID" serial PRIMARY KEY,
    "first_name" varchar,
    "last_name" varchar,
    "email" varchar,
    "password" text,
    "age" integer,
    "weightID" integer REFERENCES weight_category ("weightID"),
    "routineID" integer REFERENCES routines ("routineID"),
    "goalsID" integer REFERENCES goals ("goalsID")
);

    INSERT INTO weight_category (category) VALUES ('90-120');
    INSERT INTO weight_category (category) VALUES ('120-150');
    INSERT INTO weight_category (category) VALUES ('150-180');
    INSERT INTO weight_category (category) VALUES ('180-200');
    INSERT INTO weight_category (category) VALUES ('200+');