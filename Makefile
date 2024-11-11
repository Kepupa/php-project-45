install:
	composer install

brain-games:
	./bin/brain-games

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-calc

brain-even:
	./bin/brain-even

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin
