

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
">
</div>

