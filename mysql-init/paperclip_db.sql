-- Create the database
CREATE DATABASE IF NOT EXISTS paperclip_db;
USE paperclip_db;

-- Create the products table
DROP TABLE IF EXISTS products;
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(255),
    featured TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- Insert products for category: paper
INSERT INTO products (name, category, description, price, image, featured) VALUES
('color-laser-paper', 'paper', 'High-quality paper for laser printers with vibrant color output.', 14.99, 'img/products/paper/color-laser-paper.webp', 0),
('colored-copy-paper', 'paper', 'Vibrant colored paper, perfect for crafts, offices, and schools.', 9.49, 'img/products/paper/colored-copy-paper.webp', 0),
('copy-paper', 'paper', 'Standard white A4 copy paper, 500-sheet ream.', 5.99, 'img/products/paper/copy-paper.webp', 1),
('multipurpose-labels', 'paper', 'Versatile self-adhesive labels compatible with inkjet and laser printers.', 7.99, 'img/products/paper/multipurpose-labels.webp', 0),
('photo-paper', 'paper', 'Glossy premium photo paper for professional-quality prints.', 12.49, 'img/products/paper/photo-paper.webp', 1),
('price-labels', 'paper', 'Adhesive labels for pricing retail products, 1000-count roll.', 4.99, 'img/products/paper/price-labels.webp', 0),
('stationery-paper', 'paper', 'Elegant and textured paper suitable for invitations, letters, and resumes.', 6.75, 'img/products/paper/stationery-paper.webp', 0);

-- presentation
INSERT INTO products (name, category, description, price, image, featured) VALUES
('board-eraser', 'presentation', 'Soft felt eraser for whiteboards and chalkboards.', 2.49, 'img/products/presentation/board-eraser.webp', 0),
('chalkboard-eraser', 'presentation', 'Durable eraser for traditional chalkboards.', 2.99, 'img/products/presentation/chalkboard-eraser.webp', 0),
('cork-board', 'presentation', 'Bulletin cork board with wooden frame.', 12.99, 'img/products/presentation/cork-board.webp', 0),
('lectern', 'presentation', 'Professional lectern for presentations and speeches.', 89.00, 'img/products/presentation/lectern.webp', 0),
('overhead-projector', 'presentation', 'Classic overhead projector for transparencies.', 149.99, 'img/products/presentation/overhead-projector.webp', 1),
('presenter', 'presentation', 'Wireless presenter with laser pointer.', 24.99, 'img/products/presentation/presenter.webp', 0),
('projector', 'presentation', 'Full HD multimedia projector.', 349.99, 'img/products/presentation/projector.webp', 1),
('push-pins', 'presentation', 'Pack of 100 colorful push pins.', 1.99, 'img/products/presentation/push-pins.webp', 0),
('telescopic-pointer', 'presentation', 'Extendable pointer for whiteboard or classroom use.', 5.49, 'img/products/presentation/telescopic-pointer.webp', 0),
('whiteboard', 'presentation', 'Magnetic dry erase whiteboard, wall-mounted.', 34.99, 'img/products/presentation/whiteboard.webp', 0);

-- safety
INSERT INTO products (name, category, description, price, image, featured) VALUES
('adhesive-bandages', 'safety', 'Box of 100 assorted adhesive bandages.', 3.49, 'img/products/safety/adhesive-bandages.webp', 0),
('cut-resistant-gloves', 'safety', 'Heavy-duty gloves for blade handling and machinery.', 12.99, 'img/products/safety/cut-resistant-gloves.webp', 0),
('ear-protection', 'safety', 'Noise-canceling ear muffs for industrial environments.', 14.99, 'img/products/safety/ear-protection.webp', 0),
('fire-extinguisher', 'safety', 'Multi-purpose dry chemical fire extinguisher.', 39.99, 'img/products/safety/fire-extinguisher.webp', 0),
('first-aid-kit', 'safety', 'Complete workplace first aid kit with over 100 items.', 24.95, 'img/products/safety/first-aid-kit.webp', 0),
('first-aid-vest', 'safety', 'High visibility first aid vest with reflective strips.', 9.99, 'img/products/safety/first-aid-vest.webp', 0),
('respirator-mask', 'safety', 'Reusable respirator mask with replaceable filters.', 17.50, 'img/products/safety/respirator-mask.webp', 0),
('safety-glasses', 'safety', 'Scratch-resistant protective eyewear.', 6.49, 'img/products/safety/safety-glasses.webp', 1),
('safety-helmet', 'safety', 'Construction safety helmet with adjustable strap.', 15.99, 'img/products/safety/safety-helmet.webp', 0),
('safety-shoes', 'safety', 'Steel-toe industrial safety shoes.', 49.99, 'img/products/safety/safety-shoes.webp', 0),
('verbandskasten', 'safety', 'German standard first-aid box for vehicles.', 19.90, 'img/products/safety/verbandskasten.webp', 0),
('work-gloves', 'safety', 'Protective gloves for handling tools and materials.', 5.99, 'img/products/safety/work-gloves.webp', 0);

-- school
INSERT INTO products (name, category, description, price, image, featured) VALUES
('binder', 'school', '3-ring binder with 2-inch capacity.', 3.99, 'img/products/school/binder.webp', 0),
('calculator', 'school', 'Scientific calculator with multi-line display.', 14.99, 'img/products/school/calculator.webp', 1),
('exercise-book', 'school', 'Lined exercise book, 80 pages.', 1.25, 'img/products/school/exercise-book.webp', 0),
('folder', 'school', 'Plastic folder with elastic closure.', 2.29, 'img/products/school/folder.webp', 0),
('geometry-set', 'school', 'Complete geometry set with compass and ruler.', 5.99, 'img/products/school/geometry-set.webp', 0),
('notebook', 'school', 'Spiral-bound notebook with 100 sheets.', 2.49, 'img/products/school/notebook.webp', 1),
('pencil-case', 'school', 'Zipper pencil case with compartments.', 3.49, 'img/products/school/pencil-case.webp', 0),
('school-backpack', 'school', 'Durable school backpack with padded straps.', 24.99, 'img/products/school/school-backpack.webp', 1),
('watercolor-set', 'school', '12-color watercolor paint set with brush.', 4.99, 'img/products/school/watercolor-set.webp', 0),
('work-pad', 'school', 'Grid-lined work pad for assignments.', 1.99, 'img/products/school/work-pad.webp', 0);

-- shipping
INSERT INTO products (name, category, description, price, image, featured) VALUES
('bubble-mailer', 'shipping', 'Padded bubble mailer for shipping fragile items.', 0.99, 'img/products/shipping/bubble-mailer.webp', 0),
('envelopes', 'shipping', 'Box of 100 white business envelopes.', 4.50, 'img/products/shipping/envelopes.webp', 0),
('euro-box', 'shipping', 'Plastic euro stacking box for transport.', 8.99, 'img/products/shipping/euro-box.webp', 0),
('folding-boxes', 'shipping', 'Set of 10 cardboard folding boxes.', 6.49, 'img/products/shipping/folding-boxes.webp', 0),
('packing-tape', 'shipping', 'Strong adhesive packing tape, 3 rolls.', 3.99, 'img/products/shipping/packing-tape.webp', 1),
('stamps', 'shipping', 'Book of 20 postage stamps.', 13.20, 'img/products/shipping/stamps.webp', 0),
('tape-dispenser', 'shipping', 'Heavy-duty desktop tape dispenser.', 4.75, 'img/products/shipping/tape-dispenser.webp', 0),
('utility-knife', 'shipping', 'Retractable utility knife with extra blades.', 2.99, 'img/products/shipping/utility-knife.webp', 0),
('wallet-envelopes', 'shipping', 'Pack of 25 large wallet envelopes.', 5.25, 'img/products/shipping/wallet-envelopes.webp', 0);

-- writing-materials
INSERT INTO products (name, category, description, price, image, featured) VALUES
('ballpoint-pen-refills', 'writing-materials', 'Pack of 10 black ballpoint pen refills.', 3.99, 'img/products/writing-materials/ballpoint-pen-refills.webp', 0),
('ballpoint-pen', 'writing-materials', 'Smooth writing ballpoint pen with comfortable grip.', 1.49, 'img/products/writing-materials/ballpoint-pen.webp', 1),
('colored-pencil-set', 'writing-materials', 'Set of 24 colored pencils for school or artwork.', 5.99, 'img/products/writing-materials/colored-pencil-set.webp', 1),
('correction-tape', 'writing-materials', 'Quick-dry correction tape, 2-pack.', 2.49, 'img/products/writing-materials/correction-tape.webp', 0),
('earaser', 'writing-materials', 'Soft rubber eraser for pencil and graphite.', 0.99, 'img/products/writing-materials/earaser.webp', 0),
('fineliner-set', 'writing-materials', 'Set of 10 fineliner pens in assorted colors.', 6.99, 'img/products/writing-materials/fineliner-set.webp', 0),
('fountain-pen-cartridges', 'writing-materials', 'Box of 12 blue ink fountain pen cartridges.', 2.99, 'img/products/writing-materials/fountain-pen-cartridges.webp', 0),
('fountain-pen', 'writing-materials', 'Classic fountain pen with ergonomic design.', 12.49, 'img/products/writing-materials/fountain-pen.webp', 1),
('highlighter', 'writing-materials', 'Chisel tip highlighter, yellow, 3-pack.', 2.25, 'img/products/writing-materials/highlighter.webp', 0),
('pencil', 'writing-materials', 'HB graphite pencil, pack of 10.', 1.99, 'img/products/writing-materials/pencil.webp', 0),
('permanentmarker', 'writing-materials', 'Black permanent marker for all surfaces.', 1.49, 'img/products/writing-materials/permanentmarker.webp', 0),
('rollerball-pen', 'writing-materials', 'Liquid ink rollerball pen for smooth writing.', 2.99, 'img/products/writing-materials/rollerball-pen.webp', 0);
