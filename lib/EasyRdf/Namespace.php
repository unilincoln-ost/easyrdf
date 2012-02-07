<?php

/**
 * EasyRdf
 *
 * LICENSE
 *
 * Copyright (c) 2009-2010 Nicholas J Humfrey.  All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright notice,
 *    this list of conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution.
 * 3. The name of the author 'Nicholas J Humfrey" may be used to endorse or
 *    promote products derived from this software without specific prior
 *    written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @package    EasyRdf
 * @copyright  Copyright (c) 2009-2010 Nicholas J Humfrey
 * @license    http://www.opensource.org/licenses/bsd-license.php
 * @version    $Id$
 */

/**
 * A namespace registry and manipulation class.
 *
 * @package    EasyRdf
 * @copyright  Copyright (c) 2009-2010 Nicholas J Humfrey
 * @license    http://www.opensource.org/licenses/bsd-license.php
 */
class EasyRdf_Namespace
{
    /** Namespace registery */
    private static $_namespaces = array(
      'foaf' => 'http://xmlns.com/foaf/0.1/',
      'owl' => 'http://www.w3.org/2002/07/owl#',
      'rdf' => 'http://www.w3.org/1999/02/22-rdf-syntax-ns#',
      'rdfs' => 'http://www.w3.org/2000/01/rdf-schema#',
      'dbp' => 'http://dbpedia.org/property/',
      'skos' => 'http://www.w3.org/2004/02/skos/core#',
      'xsd' => 'http://www.w3.org/2001/XMLSchema#',
      'geo' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
      'sioc' => 'http://rdfs.org/sioc/ns#',
      'd2rq' => 'http://www.wiwiss.fu-berlin.de/suhl/bizer/D2RQ/0.1#',
      'rss' => 'http://purl.org/rss/1.0/',
      'test2' => 'http://this.invalid/test2#',
      'swrc' => 'http://swrc.ontoware.org/ontology#',
      'dbpedia' => 'http://dbpedia.org/resource/',
      'content' => 'http://purl.org/rss/1.0/modules/content/',
      'nie' => 'http://www.semanticdesktop.org/ontologies/2007/01/19/nie#',
      'gen' => 'http://www.w3.org/2006/gen/ont#',
      'dbo' => 'http://dbpedia.org/ontology/',
      'xhtml' => 'http://www.w3.org/1999/xhtml/vocab#',
      'dbpprop' => 'http://dbpedia.org/property/',
      'dcterms' => 'http://purl.org/dc/terms/',
      'owlim' => 'http://www.ontotext.com/trree/owlim#',
      'reco' => 'http://ontologies.ezweb.morfeo-project.org/reco/ns#',
      'swande' => 'http://purl.org/swan/1.2/discourse-elements/',
      'musim' => 'http://purl.org/ontology/similarity/',
      'xf' => 'http://www.w3.org/2002/xforms/',
      'sism' => 'http://purl.oclc.org/NET/sism/0.1/',
      'ical' => 'http://www.w3.org/2002/12/cal/ical#',
      'akt' => 'http://www.aktors.org/ontology/portal#',
      'earl' => 'http://www.w3.org/ns/earl#',
      'sd' => 'http://www.w3.org/ns/sparql-service-description#',
      'geonames' => 'http://www.geonames.org/ontology#',
      'days' => 'http://ontologi.es/days#',
      'media' => 'http://purl.org/microformat/hmedia/',
      'fn' => 'http://www.w3.org/2005/xpath-functions#',
      'cc' => 'http://creativecommons.org/ns#',
      'dcmit' => 'http://purl.org/dc/dcmitype/',
      'test' => 'http://test2.example.com/',
      'mu' => 'http://www.kanzaki.com/ns/music#',
      'afn' => 'http://jena.hpl.hp.com/ARQ/function#',
      'cfp' => 'http://sw.deri.org/2005/08/conf/cfp.owl#',
      'cld' => 'http://purl.org/cld/terms/',
      'space' => 'http://purl.org/net/schemas/space/',
      'factbook' => 'http://www4.wiwiss.fu-berlin.de/factbook/ns#',
      'osag' => 'http://www.ordnancesurvey.co.uk/ontology/AdministrativeGeography/v2.0/AdministrativeGeography.rdf#',
      'cal' => 'http://www.w3.org/2002/12/cal/ical#',
      'wordmap' => 'http://purl.org/net/ns/wordmap#',
      'air' => 'http://dig.csail.mit.edu/TAMI/2007/amord/air#',
      'ore' => 'http://www.openarchives.org/ore/terms/',
      'swandr' => 'http://purl.org/swan/1.2/discourse-relationships/',
      'dcelements' => 'http://purl.org/dc/elements/1.1/',
      'daia' => 'http://purl.org/ontology/daia/',
      'vann' => 'http://purl.org/vocab/vann/',
      'org' => 'http://www.w3.org/ns/org#',
      'po' => 'http://purl.org/ontology/po/',
      'xl' => 'http://langegger.at/xlwrap/vocab#',
      'giving' => 'http://ontologi.es/giving#',
      'tdb' => 'http://jena.hpl.hp.com/2008/tdb#',
      'ex' => 'http://example.org/',
      'rdfg' => 'http://www.w3.org/2004/03/trix/rdfg-1/',
      'math' => 'http://www.w3.org/2000/10/swap/math#',
      'politico' => 'http://www.rdfabout.com/rdf/schema/politico/',
      'void' => 'http://rdfs.org/ns/void#',
      'qdoslf' => 'http://foaf.qdos.com/lastfm/schema/',
      'botany' => 'http://purl.org/NET/biol/botany#',
      'umbel' => 'http://umbel.org/umbel#',
      'log' => 'http://www.w3.org/2000/10/swap/log#',
      'rev' => 'http://purl.org/stuff/rev#',
      'am' => 'http://vocab.deri.ie/am#',
      'cs' => 'http://purl.org/vocab/changeset/schema#',
      'sioct' => 'http://rdfs.org/sioc/types#',
      'swc' => 'http://data.semanticweb.org/ns/swc/ontology#',
      'memo' => 'http://ontologies.smile.deri.ie/2009/02/27/memo#',
      'sl' => 'http://www.semanlink.net/2001/00/semanlink-schema#',
      'powder' => 'http://www.w3.org/2007/05/powder#',
      'pmt' => 'http://tipsy.googlecode.com/svn/trunk/vocab/pmt#',
      'bibo' => 'http://purl.org/ontology/bibo/',
      'bibtex' => 'http://purl.oclc.org/NET/nknouf/ns/bibtex#',
      'bio2rdf' => 'http://bio2rdf.org/',
      'ome' => 'http://purl.org/ontomedia/core/expression#',
      'doap' => 'http://usefulinc.com/ns/doap#',
      'wv' => 'http://vocab.org/waiver/terms/',
      'nrl' => 'http://www.semanticdesktop.org/ontologies/2007/08/15/nrl#',
      'vcard' => 'http://www.w3.org/2006/vcard/ns#',
      'sr' => 'http://www.openrdf.org/config/repository/sail#',
      'tag' => 'http://www.holygoat.co.uk/owl/redwood/0.1/tags/',
      'wot' => 'http://xmlns.com/wot/0.1/',
      'wisski' => 'http://wiss-ki.eu/',
      'fb' => 'http://rdf.freebase.com/ns/',
      'con' => 'http://www.w3.org/2000/10/swap/pim/contact#',
      'gr' => 'http://purl.org/goodrelations/v1#',
      'wnschema' => 'http://www.cogsci.princeton.edu/~wn/schema/',
      'xs' => 'http://www.w3.org/2001/XMLSchema#',
      'osoc' => 'http://web-semantics.org/ns/opensocial#',
      'rel' => 'http://purl.org/vocab/relationship/',
      'af' => 'http://purl.org/ontology/af/',
      'swanci' => 'http://purl.org/swan/1.2/citations/',
      'ad' => 'http://schemas.talis.com/2005/address/schema#',
      'prj' => 'http://purl.org/stuff/project/',
      'video' => 'http://purl.org/media/video#',
      'event' => 'http://purl.org/NET/c4dm/event.owl#',
      'swanq' => 'http://purl.org/swan/1.2/qualifiers/',
      'conserv' => 'http://conserv.deri.ie/ontology#',
      'hard' => 'http://www.w3.org/2007/uwa/context/hardware.owl#',
      'kwijibo' => 'http://kwijibo.talis.com/',
      'biblio' => 'http://purl.org/net/biblio#',
      'imm' => 'http://schemas.microsoft.com/imm/',
      'dir' => 'http://schemas.talis.com/2005/dir/schema#',
      'doac' => 'http://ramonantonio.net/doac/0.1/#',
      'spc' => 'http://purl.org/ontomedia/core/space#',
      'dcmitype' => 'http://purl.org/dc/dcmitype/',
      'ok' => 'http://okkam.org/terms#',
      'loc' => 'http://www.w3.org/2007/uwa/context/location.owl#',
      'ne' => 'http://umbel.org/umbel/ne/',
      'cnt' => 'http://www.w3.org/2008/content#',
      'swanqs' => 'http://purl.org/swan/1.2/qualifiers/',
      'os' => 'http://www.w3.org/2000/10/swap/os#',
      'money' => 'http://purl.org/net/rdf-money/',
      'wn' => 'http://xmlns.com/wordnet/1.6/',
      'code' => 'http://telegraphis.net/ontology/measurement/code#',
      'status' => 'http://ontologi.es/status#',
      'swrl' => 'http://www.w3.org/2003/11/swrl#',
      'h5' => 'http://buzzword.org.uk/rdf/h5#',
      'ncal' => 'http://www.semanticdesktop.org/ontologies/2007/04/02/ncal#',
      'swanag' => 'http://purl.org/swan/1.2/agents/',
      'myspo' => 'http://purl.org/ontology/myspace#',
      'trackback' => 'http://madskills.com/public/xml/rss/module/trackback/',
      'dcn' => 'http://www.w3.org/2007/uwa/context/deliverycontext.owl#',
      'nfo' => 'http://www.semanticdesktop.org/ontologies/2007/03/22/nfo#',
      'vs' => 'http://www.w3.org/2003/06/sw-vocab-status/ns#',
      'doc' => 'http://www.w3.org/2000/10/swap/pim/doc#',
      'ac' => 'http://umbel.org/umbel/ac/',
      'dctype' => 'http://purl.org/dc/dcmitype/',
      'xfn' => 'http://vocab.sindice.com/xfn#',
      'ir' => 'http://www.ontologydesignpatterns.org/cp/owl/informationrealization.owl#',
      'tmo' => 'http://www.semanticdesktop.org/ontologies/2008/05/20/tmo#',
      'omb' => 'http://purl.org/ontomedia/ext/common/being#',
      'nao' => 'http://www.semanticdesktop.org/ontologies/2007/08/15/nao#',
      'unit' => 'http://data.nasa.gov/qudt/owl/unit#',
      'book' => 'http://purl.org/NET/book/vocab#',
      'sc' => 'http://umbel.org/umbel/sc/',
      'scovo' => 'http://purl.org/NET/scovo#',
      'bill' => 'http://www.rdfabout.com/rdf/schema/usbill/',
      'frbr' => 'http://purl.org/vocab/frbr/core#',
      'ti' => 'http://www.ontologydesignpatterns.org/cp/owl/timeinterval.owl#',
      'mit' => 'http://purl.org/ontology/mo/mit#',
      'jdbc' => 'http://d2rq.org/terms/jdbc/',
      'hlisting' => 'http://sindice.com/hlisting/0.1/',
      'swrlb' => 'http://www.w3.org/2003/11/swrlb#',
      'fresnel' => 'http://www.w3.org/2004/09/fresnel#',
      'ibis' => 'http://purl.org/ibis#',
      'sit' => 'http://www.ontologydesignpatterns.org/cp/owl/situation.owl#',
      'lom' => 'http://ltsc.ieee.org/rdf/lomv1p0/lom#',
      'crypto' => 'http://www.w3.org/2000/10/swap/crypto#',
      'list' => 'http://www.w3.org/2000/10/swap/list#',
      'akts' => 'http://www.aktors.org/ontology/support#',
      'xhv' => 'http://www.w3.org/1999/xhtml/vocab#',
      'coref' => 'http://www.rkbexplorer.com/ontologies/coref#',
      'lib' => 'http://schemas.talis.com/2005/library/schema#',
      'ctag' => 'http://commontag.org/ns#',
      'string' => 'http://www.w3.org/2000/10/swap/string#',
      'omc' => 'http://purl.org/ontomedia/ext/common/bestiary#',
      'c4n' => 'http://vocab.deri.ie/c4n#',
      'wgs84' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
      'mo' => 'http://purl.org/ontology/mo/',
      'irrl' => 'http://www.ontologydesignpatterns.org/cp/owl/informationobjectsandrepresentationlanguages.owl#',
      'aiiso' => 'http://purl.org/vocab/aiiso/schema#',
      'exif' => 'http://www.w3.org/2003/12/exif/ns#',
      'myspace' => 'http://purl.org/ontology/myspace#',
      'courseware' => 'http://courseware.rkbexplorer.com/ontologies/courseware#',
      'chord' => 'http://purl.org/ontology/chord/',
      'phss' => 'http://ns.poundhill.com/phss/1.0/',
      'lgd' => 'http://linkedgeodata.org/vocabulary#',
      'fec' => 'http://www.rdfabout.com/rdf/schema/usfec/',
      'commerce' => 'http://purl.org/commerce#',
      'dcam' => 'http://purl.org/dc/dcam/',
      'usgov' => 'http://www.rdfabout.com/rdf/schema/usgovt/',
      'dbr' => 'http://dbpedia.org/resource/',
      'ptr' => 'http://www.w3.org/2009/pointers#',
      'lomvoc' => 'http://ltsc.ieee.org/rdf/lomv1p0/vocabulary#',
      'xforms' => 'http://www.w3.org/2002/xforms/',
      'wdrs' => 'http://www.w3.org/2007/05/powder-s#',
      'dbpediaowl' => 'http://dbpedia.org/ontology/',
      'cmp' => 'http://www.ontologydesignpatterns.org/cp/owl/componency.owl#',
      'sail' => 'http://www.openrdf.org/config/sail#',
      'omt' => 'http://purl.org/ontomedia/ext/common/trait#',
      'meta' => 'http://www.openrdf.org/rdf/2009/metadata#',
      'abc' => 'http://www.metadata.net/harmony/ABCSchemaV5Commented.rdf#',
      'tzont' => 'http://www.w3.org/2006/timezone#',
      'rep' => 'http://www.openrdf.org/config/repository#',
      'acl' => 'http://www.w3.org/ns/auth/acl#',
      'pimo' => 'http://www.semanticdesktop.org/ontologies/2007/11/01/pimo#',
      'lfn' => 'http://www.dotnetrdf.org/leviathan#',
      'web' => 'http://www.w3.org/2007/uwa/context/web.owl#',
      'wdr' => 'http://www.w3.org/2007/05/powder#',
      'osgb' => 'http://data.ordnancesurvey.co.uk/id/',
      'link' => 'http://www.w3.org/2006/link#',
      'profiling' => 'http://ontologi.es/profiling#',
      'iswc' => 'http://annotation.semanticweb.org/2004/iswc#',
      'dailymed' => 'http://www4.wiwiss.fu-berlin.de/dailymed/resource/dailymed/',
      'resex' => 'http://resex.rkbexplorer.com/ontologies/resex#',
      'ecs' => 'http://rdf.ecs.soton.ac.uk/ontology/ecs#',
      'tl' => 'http://purl.org/NET/c4dm/timeline.owl#',
      'lang' => 'http://ontologi.es/lang/core#',
      'atomix' => 'http://buzzword.org.uk/rdf/atomix#',
      'lifecycle' => 'http://purl.org/vocab/lifecycle/schema#',
      'xhe' => 'http://buzzword.org.uk/rdf/xhtml-elements#',
      'xhtmlvocab' => 'http://www.w3.org/1999/xhtml/vocab/',
      'ddc' => 'http://purl.org/NET/decimalised#',
      'affy' => 'http://www.affymetrix.com/community/publications/affymetrix/tmsplice#',
      'custom' => 'http://www.openrdf.org/config/sail/custom#',
      'zoology' => 'http://purl.org/NET/biol/zoology#',
      'airport' => 'http://www.daml.org/2001/10/html/airport-ont#',
      'sim' => 'http://purl.org/ontology/similarity/',
      'user' => 'http://schemas.talis.com/2005/user/schema#',
      'swanco' => 'http://purl.org/swan/1.2/swan-commons/',
      'ov' => 'http://open.vocab.org/terms/',
      'ire' => 'http://www.ontologydesignpatterns.org/cpont/ire.owl#',
      'time' => 'http://www.w3.org/2006/time#',
      'contact' => 'http://www.w3.org/2000/10/swap/pim/contact#',
      'sdl' => 'http://purl.org/vocab/riro/sdl#',
      'smf' => 'http://topbraid.org/sparqlmotionfunctions#',
      'swanpav' => 'http://purl.org/swan/1.2/pav/',
      'lastfm' => 'http://purl.org/ontology/last-fm/',
      'swp' => 'http://www.w3.org/2004/03/trix/swp-2/',
      'lingvoj' => 'http://www.lingvoj.org/ontology#',
      'spin' => 'http://spinrdf.org/spin#',
      'resource' => 'http://purl.org/vocab/resourcelist/schema#',
      'doclist' => 'http://www.junkwork.net/xml/DocumentList#',
      'java' => 'http://www.w3.org/2007/uwa/context/java.owl#',
      'rsa' => 'http://www.w3.org/ns/auth/rsa#',
      'bio' => 'http://purl.org/vocab/bio/0.1/',
      'like' => 'http://ontologi.es/like#',
      'swh' => 'http://plugin.org.uk/swh-plugins/',
      'sml' => 'http://topbraid.org/sparqlmotionlib#',
      'wairole' => 'http://www.w3.org/2005/01/wai-rdf/GUIRoleTaxonomy#',
      'vote' => 'http://www.rdfabout.com/rdf/schema/vote/',
      'biol' => 'http://purl.org/NET/biol/ns#',
      'co' => 'http://purl.org/ontology/chord/',
      'eztag' => 'http://ontologies.ezweb.morfeo-project.org/eztag/ns#',
      'sm' => 'http://topbraid.org/sparqlmotion#',
      'lx' => 'http://purl.org/NET/lx#',
      'psych' => 'http://purl.org/vocab/psychometric-profile/',
      'gpt' => 'http://purl.org/vocab/riro/gpt#',
      'resist' => 'http://www.rkbexplorer.com/ontologies/resist#',
      'sp' => 'http://spinrdf.org/sp#',
      'states' => 'http://www.w3.org/2005/07/aaa#',
      'ttl' => 'http://www.w3.org/2008/turtle#',
      'acm' => 'http://www.rkbexplorer.com/ontologies/acm#',
      'geographis' => 'http://telegraphis.net/ontology/geography/geography#',
      'skosxl' => 'http://www.w3.org/2008/05/skos-xl#',
      'nmo' => 'http://www.semanticdesktop.org/ontologies/2007/03/22/nmo#',
      'frbre' => 'http://purl.org/vocab/frbr/extended#',
      'wgspos' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
      'cv' => 'http://ontologi.es/colour/vocab#',
      'spl' => 'http://spinrdf.org/spl#',
      'rei' => 'http://www.w3.org/2004/06/rei#',
      'p3p' => 'http://www.w3.org/2002/01/p3prdfv1#',
      'lode' => 'http://linkedevents.org/ontology/',
      'sv' => 'http://schemas.talis.com/2005/service/schema#',
      'pmlr' => 'http://inference-web.org/2.0/pml-relation.owl#',
      'fed' => 'http://www.openrdf.org/config/sail/federation#',
      'uri' => 'http://purl.org/NET/uri#',
      'pr' => 'http://ontologi.es/profiling#',
      'sesame' => 'http://www.openrdf.org/schema/sesame#',
      'movie' => 'http://data.linkedmdb.org/resource/movie/',
      'sede' => 'http://eventography.org/sede/0.1/',
      'prv' => 'http://purl.org/net/provenance/ns#',
      'label' => 'http://purl.org/net/vocab/2004/03/label#',
      'es' => 'http://eulersharp.sourceforge.net/2003/03swap/log-rules#',
      'obj' => 'http://www.openrdf.org/rdf/2009/object#',
      'imreg' => 'http://www.w3.org/2004/02/image-regions#',
      'xen' => 'http://buzzword.org.uk/rdf/xen#',
      'protege' => 'http://protege.stanford.edu/system#',
      'ezcontext' => 'http://ontologies.ezweb.morfeo-project.org/ezcontext/ns#',
      'cert' => 'http://www.w3.org/ns/auth/cert#',
      'daml' => 'http://www.daml.org/2001/03/daml+oil#',
      'music' => 'http://musicontology.com/',
      'common' => 'http://www.w3.org/2007/uwa/context/common.owl#',
      'product' => 'http://purl.org/commerce/product#',
      'nco' => 'http://www.semanticdesktop.org/ontologies/2007/03/22/nco#',
      'atom' => 'http://www.w3.org/2005/Atom/',
      'grddl' => 'http://www.w3.org/2003/g/data-view#',
      'puc' => 'http://purl.org/NET/puc#',
      'lfm' => 'http://purl.org/ontology/last-fm/',
      'oauth' => 'http://demiblog.org/vocab/oauth#',
      'taxo' => 'http://purl.org/rss/1.0/modules/taxonomy/',
      'plink' => 'http://buzzword.org.uk/rdf/personal-link-types#',
      'yago' => 'http://dbpedia.org/class/yago/',
      'so' => 'http://purl.org/ontology/symbolic-music/',
      'cycann' => 'http://sw.cyc.com/CycAnnotations_v1#',
      'scv' => 'http://purl.org/NET/scovo#',
      'drugbank' => 'http://www4.wiwiss.fu-berlin.de/drugbank/resource/drugbank/',
      'timeline' => 'http://purl.org/NET/c4dm/timeline.owl#',
      'ddl' => 'http://purl.org/vocab/riro/ddl#',
      'okkam' => 'http://models.okkam.org/ENS-core-vocabulary#',
      'irw' => 'http://www.ontologydesignpatterns.org/ont/web/irw.owl#',
      'climb' => 'http://climb.dataincubator.org/vocabs/climb/',
      'audio' => 'http://purl.org/media/audio#',
      'dummy' => 'http://hello.com/',
      'push' => 'http://www.w3.org/2007/uwa/context/push.owl#',
      'opensearch' => 'http://a9.com/-/spec/opensearch/1.1/',
      'acc' => 'http://purl.org/NET/acc#',
      'dbpp' => 'http://dbpedia.org/property/',
      'scot' => 'http://scot-project.org/scot/ns#',
      'tags' => 'http://www.holygoat.co.uk/owl/redwood/0.1/tags/',
      'omp' => 'http://purl.org/ontomedia/ext/common/profession#',
      'sparql' => 'http://www.openrdf.org/config/repository/sparql#',
      'gob' => 'http://purl.org/ontology/last-fm/',
      'omm' => 'http://purl.org/ontomedia/core/media#',
      'mysql' => 'http://web-semantics.org/ns/mysql/',
      'net' => 'http://www.w3.org/2007/uwa/context/network.owl#',
      'sysont' => 'http://ns.ontowiki.net/SysOnt/',
      'nexif' => 'http://www.semanticdesktop.org/ontologies/2007/05/10/nexif#',
      'coin' => 'http://purl.org/court/def/2009/coin#',
      'ldap' => 'http://purl.org/net/ldap/',
      'wn20schema' => 'http://www.w3.org/2006/03/wn/wn20/schema/',
      'soft' => 'http://www.w3.org/2007/uwa/context/software.owl#',
      'bsbm' => 'http://www4.wiwiss.fu-berlin.de/bizer/bsbm/v01/vocabulary/',
      'moat' => 'http://moat-project.org/ns#',
      'cyc' => 'http://sw.opencyc.org/concept/',
      'gold' => 'http://purl.org/linguistics/gold/',
      'dady' => 'http://purl.org/NET/dady#',
      'pmlj' => 'http://inference-web.org/2.0/pml-justification.owl#',
      'lt' => 'http://diplomski.nelakolundzija.org/LTontology.rdf#',
      'admin' => 'http://webns.net/mvcb/',
      'dcat' => 'http://vocab.deri.ie/dcat#',
      'smiley' => 'http://www.smileyontology.com/ns#',
      'rdfa' => 'http://www.w3.org/ns/rdfa#',
      'nid3' => 'http://www.semanticdesktop.org/ontologies/2007/05/10/nid3#',
      'og' => 'http://opengraphprotocol.org/schema/',
      'sioca' => 'http://rdfs.org/sioc/actions#',
      'xesam' => 'http://freedesktop.org/standards/xesam/1.0/core#',
      'wgs' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
      'opm' => 'http://openprovenance.org/ontology#',
      'rooms' => 'http://vocab.deri.ie/rooms#',
      'rif' => 'http://www.w3.org/2007/rif#',
      'play' => 'http://uriplay.org/spec/ontology/#',
      'formats' => 'http://www.w3.org/ns/formats/',
      'pmlp' => 'http://inference-web.org/2.0/pml-provenance.owl#',
      'ping' => 'http://purl.org/net/pingback/',
      'oat' => 'http://openlinksw.com/schemas/oat/',
      'evset' => 'http://dsnotify.org/vocab/eventset/0.1/',
      'bib' => 'http://zeitkunst.org/bibtex/0.1/bibtex.owl#',
      'meetup' => 'http://www.lotico.com/meetup/',
      'pmlt' => 'http://inference-web.org/2.0/pml-trust.owl#',
      'opo' => 'http://online-presence.net/opo/ns#',
      'copyright' => 'http://rhizomik.net/ontologies/2008/05/copyrightonto.owl#',
      'sawsdl' => 'http://www.w3.org/ns/sawsdl#',
      'meteo' => 'http://purl.org/ns/meteo#',
      'awol' => 'http://bblfish.net/work/atom-owl/2006-06-06/#',
      'txn' => 'http://lod.taxonconcept.org/ontology/txn.owl#',
      'ufmedia' => 'http://purl.org/microformat/hmedia/',
      'm' => 'http://www.kanzaki.com/ns/music#',
      'spatialrelations' => 'http://data.ordnancesurvey.co.uk/ontology/spatialrelations/'
    );
    /** Counter for numbering anonymous namespaces */
    private static $_anonymousNamespaceCount = 0;

    /**
      * Return all the namespaces registered
      *
      * @return array Associative array of all the namespaces.
      */
    public static function namespaces()
    {
        return self::$_namespaces;
    }

    /**
      * Return a namespace given its prefix.
      *
      * @param string $prefix The namespace prefix (eg 'foaf')
      * @return string The namespace URI (eg 'http://xmlns.com/foaf/0.1/')
      */
    public static function get($prefix)
    {
        if (!is_string($prefix) or $prefix === null or $prefix === '') {
            throw new InvalidArgumentException(
                "\$prefix should be a string and cannot be null or empty"
            );
        }

        if (preg_match('/\W/', $prefix)) {
            throw new InvalidArgumentException(
                "\$prefix should only contain alpha-numeric characters"
            );
        }

        $prefix = strtolower($prefix);
        if (array_key_exists($prefix, self::$_namespaces)) {
            return self::$_namespaces[$prefix];
        } else {
            return null;
        }
    }

    /**
      * Register a new namespace.
      *
      * @param string $prefix The namespace prefix (eg 'foaf')
      * @param string $long The namespace URI (eg 'http://xmlns.com/foaf/0.1/')
      */
    public static function set($prefix, $long)
    {
        if (!is_string($prefix) or $prefix === null or $prefix === '') {
            throw new InvalidArgumentException(
                "\$prefix should be a string and cannot be null or empty"
            );
        }

        if (preg_match('/\W/', $prefix)) {
            throw new InvalidArgumentException(
                "\$prefix should only contain alpha-numeric characters"
            );
        }

        if (!is_string($long) or $long === null or $long === '') {
            throw new InvalidArgumentException(
                "\$long should be a string and cannot be null or empty"
            );
        }

        $prefix = strtolower($prefix);
        self::$_namespaces[$prefix] = $long;
    }

    /**
      * Delete an existing namespace.
      *
      * @param string $prefix The namespace prefix (eg 'foaf')
      */
    public static function delete($prefix)
    {
        if (!is_string($prefix) or $prefix === null or $prefix === '') {
            throw new InvalidArgumentException(
                "\$prefix should be a string and cannot be null or empty"
            );
        }

        $prefix = strtolower($prefix);
        if (isset(self::$_namespaces[$prefix])) {
            unset(self::$_namespaces[$prefix]);
        }
    }

    /**
      * Delete the anonymous namespaces and reset the counter to 0
      */
    public static function reset()
    {
        while (self::$_anonymousNamespaceCount > 0) {
            self::delete('ns'.(self::$_anonymousNamespaceCount-1));
            self::$_anonymousNamespaceCount--;
        }
    }

    /**
      * Return the prefix namespace that a URI belongs to.
      *
      * @param string $uri A full URI (eg 'http://xmlns.com/foaf/0.1/name')
      * @return string The prefix namespace that it is a part of(eg 'foaf')
      */
    public static function prefixOfUri($uri)
    {
        # FIXME: sort out code duplication with shorten()
        if ($uri === null or $uri === '') {
            throw new InvalidArgumentException(
                "\$uri cannot be null or empty"
            );
        }

        if (is_object($uri) and ($uri instanceof EasyRdf_Resource)) {
            $uri = $uri->getUri();
        } else if (!is_string($uri)) {
            throw new InvalidArgumentException(
                "\$uri should be a string or EasyRdf_Resource"
            );
        }


        foreach (self::$_namespaces as $prefix => $long) {
            if (substr($uri, 0, strlen($long)) == $long)
                return $prefix;
        }

        return null;
    }

    /**
      * Shorten a URI by substituting in the namespace prefix.
      *
      * If $createNamespace is true, and the URI isn't part of an existing
      * namespace, then EasyRdf will attempt to create a new namespace and
      * use that namespace to shorten the URI (for example ns0:term).
      *
      * If it isn't possible to shorten the URI, then null will be returned.
      *
      * @param string  $uri The full URI (eg 'http://xmlns.com/foaf/0.1/name')
      * @param bool    $createNamespace If true, a new namespace will be created
      * @return string The shortened URI (eg 'foaf:name') or null
      */
    public static function shorten($uri, $createNamespace=false)
    {
        if ($uri === null or $uri === '') {
            throw new InvalidArgumentException(
                "\$uri cannot be null or empty"
            );
        }

        if (is_object($uri) and ($uri instanceof EasyRdf_Resource)) {
            $uri = $uri->getUri();
        } else if (!is_string($uri)) {
            throw new InvalidArgumentException(
                "\$uri should be a string or EasyRdf_Resource"
            );
        }

        foreach (self::$_namespaces as $prefix => $long) {
            if (substr($uri, 0, strlen($long)) == $long) {
                return $prefix . ':' . substr($uri, strlen($long));
            }
        }

        if ($createNamespace) {
            // Try and create a new namespace
            # FIXME: check the valid characters for an XML element name
            if (preg_match("/^(.+?)([\w\-]+)$/", $uri, $matches)) {
                $prefix = "ns".(self::$_anonymousNamespaceCount++);
                self::set($prefix, $matches[1]);
                return $prefix . ':' . $matches[2];
            }
        }

        return null;
    }

    /**
      * Expand a shortened URI (qname) back into a full URI.
      *
      * If it isn't possible to expand the qname, for example if the namespace
      * isn't registered, then the original string will be returned.
      *
      * @param string $shortUri The short URI (eg 'foaf:name')
      * @return string The full URI (eg 'http://xmlns.com/foaf/0.1/name')
      */
    public static function expand($shortUri)
    {
        if (!is_string($shortUri) or $shortUri === null or $shortUri === '') {
            throw new InvalidArgumentException(
                "\$shortUri should be a string and cannot be null or empty"
            );
        }

        if (preg_match("/^(\w+?):([\w\-]+)$/", $shortUri, $matches)) {
            $long = self::get($matches[1]);
            if ($long) {
                return $long . $matches[2];
            }
        }
        return $shortUri;
    }
}
