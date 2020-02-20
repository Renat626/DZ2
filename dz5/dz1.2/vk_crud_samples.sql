use vk;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `created_at`, `updated_at`) 
VALUES ('58', 'Dean', 'Satterfield', 'orin69@example.net', '9160120629', now(), now());

ALTER TABLE users MODIFY created_at DATETIME;
ALTER TABLE users MODIFY updated_at DATETIME;