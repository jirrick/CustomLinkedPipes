<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="/js/sgvizler.js"></script>
	<script type="text/javascript" src="/js/sgvizler-default.js"></script>
	sssasasdasd
<!----------SPARQL ALBUM  -------------------------->

 <div id="sparql-album1" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?ENTIT
						  WHERE
							{ ?resource rdf:type <http://dbpedia.org/ontology/Album> .
							}
">

</div>
	   
<div id="sparql-album2" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource ) AS ?TROJIC
							WHERE
                           {?resource rdf:type <http://dbpedia.org/ontology/Album> .
                           ?resource ?p ?o.
                           }

">album 2
</div>


<div id="sparql-album3" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?OutDegree
							WHERE
							{ 
								?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?outdegree. 
							?resource rdf:type <http://dbpedia.org/ontology/Album>. 
        }
">
</div>


<div id="sparql-album4" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT COUNT(?resource) AS ?InDegree
							WHERE
							{ 
							  ?resource <http://dbpedia.org/ontology/wikiPageWikiLink> ?indegree. 
							  ?indegree rdf:type <http://dbpedia.org/ontology/Album>. 
							}


">
</div>

<div id="sparql-album5" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?DruhAlba COUNT(?album ) as ?ENTIT
							{
							?album rdf:type <http://dbpedia.org/ontology/Album>.
							?album <http://dbpedia.org/ontology/musicFormat> ?DruhAlba.
							}
							ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-album6" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?UMELEC COUNT(?album ) as ?ENTIT
							{ ?album rdf:type <http://dbpedia.org/ontology/Album>.
							   ?album <http://dbpedia.org/ontology/artist> ?artist.
							   ?artist rdfs:label ?UMELEC.
							}
							ORDER BY DESC(?ENTIT)


">
</div>

<div id="sparql-album7" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?ZANR COUNT(?album ) as ?ENTIT
								{
								?album rdf:type <http://dbpedia.org/ontology/Album>.
								?album <http://dbpedia.org/ontology/genre> ?genre .
								?genre rdfs:label ?ZANR.
								}
								ORDER BY DESC(?ENTIT)

">
</div>

<div id="sparql-album8" class="stat"
       data-sgvizler-endpoint="https://cs.dbpedia.org/sparql"
       data-sgvizler-query="SELECT DISTINCT ?OriginalniJazyk COUNT(?album ) as ?ENTIT

							{
							?album rdf:type <http://dbpedia.org/ontology/Album>.
							?album <http://dbpedia.org/ontology/originalLanguage> ?language.
							?language rdfs:label ?OriginalniJazyk.
							}
							ORDER BY DESC(?ENTIT)

">
</div>
<!----------SPARQL ALBUM  KONEC-------------------------->