# Level 00
Dans ce niveau, nous ne trouvons rien d'utile dans le `home`.
Sachant que notre but est trouver le "mot de passe" de **flag00**, nous allons chercher des données liées à celui-ci.
Pour cela, on execute `find / -group flag00 2>/dev/null`.
On constate qu'un fichier `/usr/sbin/john` appartient à **flag00**

\> `cat /usr/sbin/john `
\< `cdiiddwpgswtgt`

Serait-ce le mot de passe ?
\> `su flag00`
Cela ne fonctionne pas.

Level00, ça devrait pas être bien compliqué non ?
Demandons à https://www.dcode.fr/ d'analyser ça pour nous.

Si on lui demande de trouver le chiffrement, il ne nous donne pas vraiment de résultat..
On va donc s'amuser à tester tous les chiffrements qu'ils nous propose malgré leur faibles probabilité selon le site.

Mais en testant le Chiffre de César, surprise !
On a un résultat crédible: `nottoohardhere` avec un décalage de +11 (ou -15)
\> `su flag00` et ça fonctionne !

Plus qu'à faire `getflag`
**Flag**: `x24ti5gi3x0ol2eh4esiuxias`


