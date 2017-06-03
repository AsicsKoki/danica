-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 05:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `definitions`
--

CREATE TABLE `definitions` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `definition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `definitions`
--

INSERT INTO `definitions` (`id`, `subject_id`, `user_id`, `definition`) VALUES
(24, 1, 1, 'The internal energy is a function of state and the total microscopic kinetic and potential energies of the particles  composing the system.'),
(25, 1, 1, 'First law of thermodynamics state that internal energy is a function of state and the increase in internal energy is equal to the sum of the heat supplied to system and work done on system.'),
(26, 1, 1, 'Speed is the rate of change of distance traveled with respect to time.'),
(27, 1, 1, 'Velocity is the rate of change of its displacement with respect to time.'),
(28, 1, 1, 'Acceleration of an object is the rate of change of its velocity with respect to time.'),
(29, 1, 1, 'Hookeâ€™s Law states that within the limit of proportionality, the extension produced in a material is directly proportional to the load applied.'),
(30, 1, 1, 'The principle of moments states that, when an object is in equilibrium, the sum of anticlockwise moments about any point equals the sum of clockwise moments about the same point.'),
(31, 1, 1, 'The moment of a force is the product of the force and the perpendicular distance between the axis of rotation and the line of action of the force.'),
(32, 1, 1, 'Stability of an object refers to its ability to return to its original position after it has been displaced from that position.'),
(33, 1, 1, 'Pressure is force acting per unit area.'),
(34, 2, 1, 'Addition is bringing two or more numbers (or things) together to make a new total. The numbers to be added together are called the \"Addends\".'),
(35, 2, 1, 'Subtraction is taking one number away from another. Minuend is the number that is to be subtracted from. Subtrahend is the number that is to be subtracted. Difference is the result of subtracting one number from another.'),
(37, 2, 1, 'The division of two natural numbers is the process of calculating the number of times one number is contained within one another. Division can also be thought of as the process of evaluating a fraction, and fractional notation (a/b) is commonly used to represent division.'),
(38, 2, 1, 'Multiplication is (in its simplest form) repeated addition. But we can also multiply by fractions or decimals, which goes beyond the simple idea of repeated addition. '),
(39, 2, 1, 'Cone is a three dimensional shape with only one vertex, having a circular base.'),
(40, 2, 1, 'Diagonal is a line segment that connects two vertices in a polygon.'),
(41, 2, 1, 'Fibonacci Sequence is a sequence whereby each number is the sum of the two numbers preceding it.'),
(42, 2, 1, 'Formula is a rule that describes the relationship of two or more variables. An equation stating the rule.'),
(43, 2, 1, 'Frequency is the number of times an event can happen in a specific period of times. Often used in probability.'),
(44, 2, 1, 'Logarithm is a power to which a base, [actually 10] must be raised to produce a given number. If nx = a, the logarithm of a, with n as the base, is x.'),
(45, 3, 1, 'Cell is the smallest structural and functional unit of an organism, which is typically microscopic and consists of cytoplasm and a nucleus enclosed in a membrane.'),
(46, 3, 1, 'Eucaryote is any organism having as its fundamental structural unit a cell type that contains specialized organelles in the cytoplasm, a membrane-bound nucleus enclosing genetic material organized into chromosomes, and an elaborate system of division by mitosis or meiosis, characteristic of all life forms except bacteria, blue-green algae, and other primitive microorganisms.'),
(47, 3, 1, 'Bacteria is a member of a large group of unicellular microorganisms which have cell walls but lack organelles and an organized nucleus, including some which can cause disease.'),
(48, 3, 1, 'Cell nucleus is the \"control room\" for the cell. The nucleus gives out all the orders.'),
(49, 3, 1, 'Chloroplast are organelles, specialized subunits, in plant and algal cells, main role of which is to conduct photosynthesis, where the photosynthetic pigment chlorophyll captures the energy from sunlight and converts and stores it in the energy-storage molecules ATP and NADPH while freeing oxygen from water.'),
(50, 3, 1, 'Deoxyribonucleic acid (DNA) is a molecule that carries the genetic instructions used in the growth, development, functioning and reproduction of all known living organisms and many viruses.'),
(51, 3, 1, 'An egg is the organic vessel containing the zygote in which an animal embryo develops until it can survive on its own; at which point the animal hatches. An egg results from fertilization of an ovum.'),
(52, 3, 1, 'A habitat is an ecological or environmental area that is inhabited by a particular species of animal, plant, or other type of organism. The term typically refers to the zone in which the organism lives and where it can find food, shelter, protection and mates for reproduction. It is the natural environment in which an organism lives, or the physical environment that surrounds a species population.'),
(54, 3, 1, 'Meiosis is a specialized type of cell division that reduces the chromosome number by half, creating four haploid cells, each genetically distinct from the parent cell that gave rise to them. This process occurs in all sexually reproducing single-celled and multicellular eukaryotes, including animals, plants, and fungi.'),
(55, 3, 1, 'A food chain is a linear network of links in a food web starting from producer organisms (such as grass or trees which use radiation from the Sun to make their food) and ending at apex predator species (like grizzly bears or killer whales), detritivores (like earthworms or woodlice), or decomposer species (such as fungi or bacteria). A food chain also shows how the organisms are related with each other by the food they eat.'),
(56, 4, 1, 'An acid is a molecule or ion capable of donating a hydron (proton or hydrogen ion H+), or, alternatively, capable of forming a covalent bond with an electron pair (a Lewis acid).'),
(57, 4, 1, 'In chemistry, an alcohol is any organic compound in which the hydroxyl functional group (â€“OH) is bound to a saturated carbon atom. The term alcohol originally referred to the primary alcohol ethanol (ethyl alcohol), the predominant alcohol in alcoholic beverages.'),
(58, 4, 1, 'An aldehyde or alkanal is an organic compound containing a functional group with the structure âˆ’CHO, consisting of a carbonyl center (a carbon double-bonded to oxygen) with the carbon atom also bonded to hydrogen and to an R group, which is any generic alkyl or side chain. The groupâ€”without Râ€”is the aldehyde group, also known as the formyl group. Aldehydes are common in organic chemistry. Many fragrances are aldehydes.'),
(59, 4, 1, 'A molecule is an electrically neutral group of two or more atoms held together by chemical bonds. Molecules are distinguished from ions by their lack of electrical charge. However, in quantum physics, organic chemistry, and biochemistry, the term molecule is often used less strictly, also being applied to polyatomic ions.'),
(60, 4, 1, 'Condensation is the change of the physical state of matter from gas phase into liquid phase, and is the reverse of evaporation. The word most often refers to the water cycle. It can also be defined as the change in the state of water vapour to liquid water when in contact with a liquid or solid surface or cloud condensation nuclei within the atmosphere.'),
(61, 4, 1, 'Redox (short for reductionâ€“oxidation reaction) is a chemical reaction in which the oxidation states of atoms are changed. Any such reaction involves both a reduction process and a complementary oxidation process, two key concepts involved with electron transfer processes. Redox reactions include all chemical reactions in which atoms have their oxidation state changed; in general, redox reactions involve the transfer of electrons between chemical species.'),
(62, 4, 1, 'Diffusion is the net movement of molecules or atoms from a region of high concentration (or high chemical potential) to a region of low concentration (or low chemical potential). This is also referred to as the movement of a substance down a concentration gradient.'),
(63, 4, 1, 'Solid is one of the four fundamental states of matter (the others being liquid, gas, and plasma). It is characterized by structural rigidity and resistance to changes of shape or volume. Unlike a liquid, a solid object does not flow to take on the shape of its container, nor does it expand to fill the entire volume available to it like a gas does.'),
(64, 4, 1, 'A solvent  is a substance that dissolves a solute (a chemically distinct liquid, solid or gas), resulting in a solution. A solvent is usually a liquid but can also be a solid, a gas, or a supercritical fluid. The quantity of solute that can dissolve in a specific volume of solvent varies with temperature. Common uses for organic solvents are in dry cleaning (e.g. tetrachloroethylene), as paint thinners (e.g. toluene, turpentine), as nail polish removers and glue solvents (acetone, methyl acetate, ethyl acetate), in spot removers (e.g. hexane, petrol ether), in detergents (citrus terpenes) and in perfumes (ethanol).'),
(65, 4, 1, 'A metal is a material (an element, compound, or alloy) that is typically hard, opaque, shiny, and has good electrical and thermal conductivity. Metals are generally malleableâ€”that is, they can be hammered or pressed permanently out of shape without breaking or crackingâ€”as well as fusible (able to be fused or melted) and ductile (able to be drawn out into a thin wire). About 91 of the 118 elements in the periodic table are metals, the others are nonmetals or metalloids.'),
(66, 5, 1, 'A black hole is a region of spacetime exhibiting such strong gravitational effects that nothingâ€”not even particles and electromagnetic radiation such as lightâ€”can escape from inside it. The theory of general relativity predicts that a sufficiently compact mass can deform spacetime to form a black hole. The boundary of the region from which no escape is possible is called the event horizon.'),
(67, 5, 1, 'A comet is an icy small Solar System body that, when passing close to the Sun, warms and begins to release gasses, a process called outgassing.'),
(68, 5, 1, 'A constellation is formally defined as a region of the celestial sphere, with boundaries laid down by the International Astronomical Union (IAU). The constellation areas mostly had their origins in Western-traditional patterns of stars from which the constellations take their names.'),
(69, 5, 1, 'A dwarf star is a star of relatively small size and low luminosity. Most main sequence stars are dwarf stars.'),
(70, 5, 1, 'A field galaxy is a galaxy that does not belong to a larger cluster of galaxies and hence is gravitationally alone.'),
(71, 5, 1, 'A meteoroid is a small rocky or metallic body in outer space. Meteoroids are significantly smaller than asteroids, and range in size from small grains to 1 meter-wide objects. Objects smaller than this are classified as micrometeoroids or space dust.'),
(72, 5, 1, 'Starfield refers to a set of stars visible in an arbitrarily-sized field of view, usually in the context of some region of interest within the celestial sphere. For example: the starfield surrounding the stars Betelgeuse and Rigel could be defined as encompassing some or all of the Orion constellation.'),
(73, 5, 1, 'A nebula  is an interstellar cloud of dust, hydrogen, helium and other ionized gases. Most nebulae are of vast size, even millions of light years in diameter. Many nebulae are visible due to their fluorescence caused by the embedded hot stars, while others are so diffuse they can only be detected with long exposures and special filters. The Orion Nebula, the brightest nebula in the sky that occupies a region twice the diameter of the full Moon, can be viewed with the naked eye but was missed by early astronomers.'),
(76, 5, 1, 'Appulse is an astronomical term that refers to the closest apparent separation between one celestial object to another, as seen from a third body. The term usually refers to the closest apparent approach of two planets together in the sky, or of the Moon to a star or planet while the Moon orbits Earth, as seen from Earth.'),
(77, 5, 1, 'A binary star is a star system consisting of two stars orbiting around their common barycenter. Systems of two or more stars are called multiple star systems. These systems, especially when more distant, often appear to the unaided eye as a single point of light, and are then revealed as multiple by other means. Research over the last two centuries suggests that half or more of visible stars are part of multiple star systems.'),
(78, 6, 1, 'A volcano is a rupture in the crust of a planetary-mass object, such as Earth, that allows hot lava, volcanic ash, and gases to escape from a magma chamber below the surface.'),
(79, 6, 1, 'Volcanic ash consists of fragments of pulverized rock, minerals and volcanic glass, created during volcanic eruptions and measuring less than 2 mm (0.079 inches) in diameter. Volcanic ash is formed during explosive volcanic eruptions when dissolved gases in magma expand and escape violently into the atmosphere.'),
(80, 6, 1, 'An atmosphere is a layer of gases surrounding a planet or other material body, that is held in place by the gravity of that body. An atmosphere is more likely to be retained if the gravity it is subject to is high and the temperature of the atmosphere is low. The atmosphere of Earth is mostly composed of nitrogen (about 78%), oxygen (about 21%), argon (about 0.9%) with carbon dioxide and other gases in trace amounts.'),
(81, 6, 1, 'In geology, bedrock is the lithified rock that lies under a loose softer material called regolith at the surface of the Earth or other terrestrial planets. The broken and weathered regolith includes soil and subsoil. The surface of the bedrock beneath the soil cover is known as rockhead in engineering geology, and its identification by digging, drilling or geophysical methods is an important task in most civil engineering projects.'),
(82, 6, 1, 'A continent is one of several very large landmasses on Earth. Generally identified by convention rather than any strict criteria, up to seven regions are commonly regarded as continents. Ordered from largest in size to smallest, they are: Asia, Africa, North America, South America, Antarctica, Europe, and Australia.'),
(83, 6, 1, 'Culture is the social behavior and norms found in human societies. Culture is a central concept in anthropology, encompassing the range of phenomena that are transmitted through social learning in human societies.'),
(84, 6, 1, 'Demography is the statistical study of populations, especially human beings. As a very general science, it can analyze any kind of dynamic living population, i.e., one that changes over time or space. Demography encompasses the study of the size, structure, and distribution of these populations, and spatial or temporal changes in them in response to birth, migration, ageing, and death.'),
(85, 6, 1, 'An equator is the intersection of the surface of a rotating spheroid (such as a planet) with the plane perpendicular to the axis of rotation and midway between its poles.'),
(86, 6, 1, 'Geologically, a fjord or fiord is a long, narrow inlet with steep sides or cliffs, created by glacial erosion.'),
(87, 6, 1, 'A river delta is a landform that forms from deposition of sediment carried by a river as the flow leaves its mouth and enters slower-moving or standing water. This occurs where a river enters an ocean, sea, estuary, lake, reservoir, or (more rarely) another river that cannot transport away the supplied sediment. River deltas are ecologically important as they provide coastline defense, are home to many species, and can impact drinking water supply.'),
(88, 7, 1, 'An anachronism is a chronological inconsistency in some arrangement, especially a juxtaposition of persons, events, objects, or customs from different periods of time. The most common type of anachronism is an object misplaced in time, but it may be a verbal expression, a technology, a philosophical idea, a musical style, a material, a plant or animal, a custom or anything else associated with a particular period in time so that it is incorrect to place it outside its proper temporal domain.'),
(89, 7, 1, 'Cultural artifact or artefact is a term used in the social sciences, particularly anthropology, ethnology, and sociology for anything created by humans which gives information about the culture of its creator and users.'),
(90, 7, 1, 'Archaeology, or archeology, is the study of human activity through the recovery and analysis of material culture. The archaeological record consists of artifacts, architecture, biofacts or ecofacts, and cultural landscapes.'),
(91, 7, 1, 'The Bronze Age is a historical period characterized by the use of bronze, proto-writing, and other early features of urban civilization. The Bronze Age is the second principal period of the three-age Stone-Bronze-Iron system, as proposed in modern times by Christian JÃ¼rgensen Thomsen, for classifying and studying ancient societies.'),
(92, 7, 1, 'A calendar is, in the context of archival science, textual scholarship, and archival publication, a descriptive list of documents.'),
(93, 7, 1, 'A chronicle is a historical account of facts and events ranged in chronological order, as in a time line. Typically, equal weight is given for historically important events and local events, the purpose being the recording of events that occurred, seen from the perspective of the chronicler.'),
(94, 7, 1, 'Epigraphy is the study of inscriptions or epigraphs as writing; it is the science of identifying graphemes, clarifying their meanings, classifying their uses according to dates and cultural contexts, and drawing conclusions about the writing and the writers.'),
(95, 7, 1, 'A history journal is an academic serial publication designed to present new scholarship on a historical subject, usually a subfield of history, with articles generally being subjected to peer review.'),
(96, 7, 1, 'A manuscript is any document written by hand or typewritten, as opposed to being mechanically printed or reproduced in some indirect or automated way.'),
(97, 7, 1, 'Palaeography is the study of ancient and historical handwriting (that is to say, of the forms and processes of writing, not the textual content of documents). Included in the discipline is the practice of deciphering, reading, and dating historical manuscripts, and the cultural context of writing, including the methods with which writing and books were produced, and the history of scriptoria. The discipline is important for understanding, authenticating, and dating ancient texts.'),
(98, 8, 1, 'Canvas is a strong, woven cloth traditionally used by artists as a support (surface on which to paint).'),
(99, 8, 1, 'In the arts, bricolage (French for \"DIY\" or \"do-it-yourself projects\") is the construction or creation of a work from a diverse range of things that happen to be available, or a work created by such a process.'),
(100, 8, 1, 'Fantastic realism refers to the work of a group of painters working in the late 1950s in Vienna who combined the painterly precision of the old masters with an interest in modern art movements and psychoanalysis.'),
(101, 8, 1, 'Installation art is used to describe large-scale, mixed-media constructions, often designed for a specific place or for a temporary period of time.'),
(102, 8, 1, 'Art Nouveau is a decorative style of the late 19th and early 20th centuries that flourished principally in Europe and the U.S. Although it influenced painting and sculpture, its chief manifestations were in architecture and the decorative and graphic arts. It is characterized by sinuous, asymmetrical lines based on organic forms.'),
(103, 8, 1, 'Assemblage is a three-dimensional composition made from a variety of traditionally non-artistic materials and objects.'),
(104, 8, 1, 'Avant-garde is french for â€œadvanced guard,â€ this term is used in English to describe a group that is innovative, experimental, and inventive in its technique or ideology, particularly in the realms of culture, politics, and the arts.'),
(105, 8, 1, 'Canon is a group of artistic, literary, or musical works that are generally accepted as representing a field.'),
(106, 8, 1, 'Calligraphy is a visual art related to writing. It is the design and execution of lettering with a broad tip instrument, brush, or other writing instruments.'),
(108, 8, 1, 'Conceptual art is art that emerged in the late 1960s, emphasizing ideas and theoretical practices rather than the creation of visual forms. In 1967, the artist Sol LeWitt gave the new genre its name in his essay â€œParagraphs on Conceptual Art,â€ in which he wrote, â€œThe idea itself, even if not made visual, is as much a work of art as any finished product.â€');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL,
  `subject_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_description`) VALUES
(1, 'Physics', 'Physics is the natural science that involves the study of matter and its motion and behavior through space and time, along with related concepts such as energy and force. One of the most fundamental scientific disciplines, the main goal of physics is to understand how the universe behaves.'),
(2, 'Mathematics', 'Mathematics is the study of topics such as quantity (numbers), structure, space, and change. There is a range of views among mathematicians and philosophers as to the exact scope and definition of mathematics.'),
(3, 'Biology', 'Biology is a natural science concerned with the study of life and living organisms, including their structure, function, growth, evolution, distribution, identification and taxonomy.'),
(4, 'Chemistry', 'Chemistry is a branch of physical science that studies the composition, structure, properties and change of matter. Chemistry includes topics such as the properties of individual atoms, how atoms form chemical bonds to create chemical compounds, the interactions of substances through intermolecular forces that give matter its general properties, and the interactions between substances through chemical reactions to form different substances.'),
(5, 'Astronomy', 'Astronomy is a natural science that studies celestial objects and phenomena. It applies mathematics, physics, and chemistry, in an effort to explain the origin of those objects and phenomena and their evolution. Objects of interest include planets, moons, stars, galaxies, and comets; while the phenomena include supernova explosions, gamma ray bursts, and cosmic microwave background radiation.'),
(6, 'Geography', 'Geography is a field of science devoted to the study of the lands, the features, the inhabitants, and the phenomena of Earth. Geography is an all-encompassing discipline that seeks an understanding of the Earth and its human and natural complexities, not merely where objects are, but how they have changed and come to be.'),
(7, 'History', 'History is the study of the past as it is described in written documents. It is an umbrella term that relates to past events as well as the memory, discovery, collection, organization, presentation, and interpretation of information about these events. '),
(8, 'Art', 'Art is a diverse range of human activities in creating visual, auditory or performing artifacts (artworks), expressing the author\'s imaginative or technical skill, intended to be appreciated for their beauty or emotional power. In their most general form these activities include the production of works of art, the criticism of art, the study of the history of art, and the aesthetic dissemination of art.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(65) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `date_joined`) VALUES
(1, 'admin', 'admin', 'Danica', 'Popadic', 'danicaozb@gmail.com', '2017-04-07 18:51:47'),
(2, 'danica', 'danica', 'danica', 'popadic', 'danicaozb@gmail.com', '2017-06-03 15:43:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `definitions`
--
ALTER TABLE `definitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `predmet_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ime_predmet` (`subject_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `definitions`
--
ALTER TABLE `definitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `definitions`
--
ALTER TABLE `definitions`
  ADD CONSTRAINT `definitions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `definitions_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
