
joint.setTheme('modern');
var graph = new joint.dia.Graph;

var paper = new joint.dia.Paper({
	width: 1800,
	height: 850,
	model: graph,
	gridSize: 10,
    drawGrid: true,
	background:{
		///image: 'img/escom.jpg',
		color: 'rgba(0,0,0,0.8)',
		//size: '100% 100%'
		size: {
			width:1800,
			height:850
		}
	}
});
graph.fromJSON(JSON.parse('{"cells":[{"type":"standard.Rectangle","position":{"x":180,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"91e65f62-9f9b-4aca-8572-9f79cbdef352","z":1,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":210,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"0aeac9f1-14f9-408b-83e9-184e80f38d59","z":2,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":300,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"d7e28ebb-2880-415e-9413-70b380d87798","z":3,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":340,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"f6b6d6df-94af-459a-923a-64227dc8aa6b","z":4,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"9fb9e815-79db-4d62-a633-240677b08cac","z":5,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":420,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"63881835-62bf-47ea-93b9-c948aeebb711","z":6,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":460,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"40e40a88-bf6a-4178-a790-5f7a422fb105","z":7,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":500,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"fea028bd-f842-4157-87c9-df53cc0c8974","z":8,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":540,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"51ec0a1f-dc0b-4068-bd74-988e3229e672","z":9,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":580,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"3e71c42f-befb-473d-ab9d-f91effd30ab4","z":10,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":620,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"6c0db90d-60e2-41aa-a030-7fc91ff064b4","z":11,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":660,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"5c7eae77-8991-43b8-afde-70c38b3f6a03","z":12,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":556,"y":323},"size":{"width":132,"height":152},"angle":0,"id":"9eeffa81-ef32-48b5-acd4-a0aca488a59a","z":13,"attrs":{"body":{"fill":"#008000","stroke-width":2},"label":{"text":"Área verde","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":878,"y":323},"size":{"width":147,"height":152},"angle":0,"id":"7136b167-67fc-48be-8a8f-e54d8330db82","z":14,"attrs":{"body":{"fill":"#008000","stroke-width":2},"label":{"text":"Área verde","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1215,"y":317},"size":{"width":149,"height":152},"angle":0,"id":"7a71b46f-7b27-4c71-b9c3-903020aa54d8","z":15,"attrs":{"body":{"fill":"#008000","stroke-width":2},"label":{"text":"Área verde","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":209,"y":321},"size":{"width":153,"height":156},"angle":0,"id":"b6c9c589-f852-4f72-b383-2d22c2ce7b73","z":16,"attrs":{"body":{"fill":"#008000","stroke-width":2},"label":{"text":"Área verde","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1080,"y":30},"size":{"width":76,"height":69},"angle":0,"id":"5e8244b8-69f6-4089-8070-730aca87bb64","z":24,"attrs":{"body":{"fill":"#ff0000","stroke-width":0},"label":{"fontSize":10,"text":"Entrada ESCOM","fontFamily":"Arial"},"clave":{"id":3}}},{"type":"standard.Rectangle","position":{"x":1650,"y":670},"size":{"width":99,"height":155},"angle":0,"id":"f4a9b4c4-69c9-4db3-a93d-2e6dc75d93f9","z":25,"attrs":{"body":{"fill":"#ff0000","stroke-width":0},"label":{"text":"Entrada","fontFamily":"Arial"},"clave":{"id":3}}},{"type":"standard.Rectangle","position":{"x":1020,"y":100},"size":{"width":60,"height":66},"angle":0,"id":"528e04d6-7cea-4f62-aa80-42c6b1999b8a","z":30,"attrs":{"body":{"fill":"#ffff00","stroke-width":0},"label":{"text":"Motos","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1160,"y":30},"size":{"width":125,"height":63},"angle":0,"id":"f1a85d24-4f66-4b53-a81d-74986eda4613","z":31,"attrs":{"body":{"fill":"#ffff00","stroke-width":0},"label":{"text":"Bicicletas","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":700,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"432a8662-9a49-49f5-a746-e42be7858e88","z":32,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":740,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"38246431-34bc-435f-a096-a71946161fd2","z":33,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":780,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"4a8ecef9-4aa7-4f43-ae57-e5137265d144","z":34,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":820,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"b5f472a2-9f1d-420e-8c1e-9b2ae3bb633e","z":35,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":860,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"1abb7496-3f78-4aa8-b168-aeff6a7aad3f","z":36,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":900,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"14d0f176-1822-43e2-a249-009953f6ecd0","z":37,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":230},"size":{"width":26,"height":53},"angle":90,"id":"63b3c904-824a-4466-8271-bcbf966f11c3","z":38,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":940,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"076db3fd-f97c-4b5b-a8c0-16ffb975216e","z":39,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":260},"size":{"width":26,"height":53},"angle":90,"id":"71d43d41-e694-4299-8749-5afad2ad1fa7","z":40,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":290},"size":{"width":26,"height":53},"angle":90,"id":"ce6b1fec-ff08-4108-aa5c-4f4ca7f87328","z":41,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":320},"size":{"width":26,"height":53},"angle":90,"id":"a9fa7a84-9214-4c2a-9159-75b5030dd189","z":42,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":350},"size":{"width":26,"height":53},"angle":90,"id":"c9ce4aa7-3df5-45b1-8cce-4a3d8ec0e554","z":43,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":410},"size":{"width":26,"height":53},"angle":90,"id":"11d54fd2-def4-4b4c-b614-fc3528d51806","z":44,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":380},"size":{"width":26,"height":53},"angle":90,"id":"d8480136-e84c-4cb3-ba42-7506cecc78f7","z":45,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1215,"y":264},"size":{"width":22,"height":42},"angle":0,"id":"48f7fcbd-dc71-48b9-84cc-aafff2c8b79a","z":46,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1247.5,"y":264},"size":{"width":22,"height":42},"angle":0,"id":"49753cc0-925c-4072-9402-b4c43d1c31c5","z":47,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1278.5,"y":264},"size":{"width":22,"height":42},"angle":0,"id":"fe689979-c5bf-4efc-bf91-3a853f6f7b9f","z":49,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1308.5,"y":264},"size":{"width":22,"height":42},"angle":0,"id":"990408db-32ae-43e4-8501-c85141e93341","z":51,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1342,"y":264},"size":{"width":22,"height":42},"angle":0,"id":"ebff3895-88fd-47fb-9e7b-f31ca082bfa5","z":52,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1220,"y":480},"size":{"width":21,"height":46},"angle":0,"id":"f739ec2e-6ed0-4da5-b897-c44ba5c43be9","z":53,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1250,"y":480},"size":{"width":19,"height":46},"angle":0,"id":"3859310e-c710-4fed-a851-bad3f7204226","z":54,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1310,"y":480},"size":{"width":23,"height":47},"angle":0,"id":"ea2c2cfd-470b-450a-81aa-f838751bcb44","z":57,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1340,"y":480},"size":{"width":20,"height":48},"angle":0,"id":"d4148620-ad9b-4412-89cd-4941d717a692","z":58,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1280,"y":480},"size":{"width":21,"height":47},"angle":0,"id":"379fad25-5954-48c9-9ebf-a98f23473296","z":59,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1181,"y":118},"size":{"width":34,"height":53},"angle":0,"id":"d8f7d680-a5a1-4335-ab3e-39620aa5fe9d","z":60,"attrs":{"body":{"fill":"#0080ff","stroke-width":0},"label":{"text":"1","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1221,"y":118},"size":{"width":34,"height":53},"angle":0,"id":"44967d51-3c1e-4d06-974a-1fa71c5f6f11","z":61,"attrs":{"body":{"fill":"#0080ff","stroke-width":0},"label":{"text":"2","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1263,"y":118},"size":{"width":34,"height":53},"angle":0,"id":"93e0249d-66a3-40ec-865e-18fac7c88d1b","z":62,"attrs":{"body":{"fill":"#0080ff","stroke-width":0},"label":{"text":"3","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1302,"y":118},"size":{"width":34,"height":53},"angle":0,"id":"2dbb7756-2c17-4e04-9eab-ed16fcad813c","z":64,"attrs":{"body":{"fill":"#0080ff","stroke-width":0},"label":{"text":"4","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1352,"y":118},"size":{"width":34,"height":53},"angle":0,"id":"072a417f-60c5-4c95-90ed-1a424e7cc570","z":65,"attrs":{"body":{"fill":"#0080ff","stroke-width":0},"label":{"text":"5","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1230,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"6b220623-e0f1-4de5-a3c5-87c49c85136f","z":66,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1260,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"7a8e68ab-6370-49ee-9d69-38dd026c8f4a","z":67,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1290,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"e5bb901e-11e4-47a7-87b0-a9492a95c2c0","z":68,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1350,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"b5d85bf9-bd2f-4e31-8dca-abd6e6505cf0","z":69,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1320,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"9f31bc00-25eb-4b21-a7a1-238e72a30f09","z":70,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"2ecc182a-f087-4425-8451-0cf671a2455e","z":71,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1410,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"914db441-c8cb-4c59-b74e-666e355d3594","z":72,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":310},"size":{"width":24,"height":43},"angle":90,"id":"041a46f2-202b-4324-a76f-c10607466875","z":73,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":950,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"9f001916-8f76-4ae4-9fb8-3266179e77b5","z":74,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":980,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"2ae98eed-216e-47b1-b7f8-1c12872d3894","z":75,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":920,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"5188d802-a026-4188-8bf6-1a2b79d186f6","z":76,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":890,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"74bf9dc1-44dc-41d0-87bd-33e9e28ed208","z":77,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":860,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"5ed372aa-f373-461c-83b9-ec8dfd58e82f","z":78,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":830,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"50d01dd9-289c-44eb-8e8f-4628397a70b3","z":79,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":800,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"78e358b6-b2b7-4919-9e91-d212d0a6ccdc","z":80,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":770,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"059910d5-7d50-4d5c-803a-cd4cc699b939","z":81,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":740,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"552b97c5-8463-4149-8c6e-8d3d037ab031","z":82,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"888bca11-293e-4fb4-b308-e2c8bea8d49f","z":84,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":680,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"6ed333b4-e94d-42df-b869-41ec4c905321","z":85,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":650,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"547b3f11-b9cd-48d8-bf6e-fb54c9ce0a84","z":86,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":620,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"759ff1b9-59a8-4d15-9ab8-979e462a9271","z":87,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":590,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"6b7fb30e-f845-43a2-a368-6cba56c46bcf","z":88,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":560,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"467e3755-1c89-4fd9-bb5a-ca2c386dd15c","z":89,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":330,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"c5d08b84-0755-4f7f-a998-7b644e8050a9","z":90,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":210,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"08ba06a2-afbe-40d1-8360-f15a987f343b","z":91,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":300,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"0cda540d-e573-4361-a37c-c848abd85596","z":92,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":150,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"fd9b40b8-c645-4e9e-8be4-ec50cf64fbf5","z":93,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":180,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"0595bf96-78c8-4c16-af67-a94fd30edb8f","z":94,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":240,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"4f7db27d-0cf2-409a-9049-e58ad6058157","z":95,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":270,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"2fe22133-9945-4791-a8a0-2da4b2d103e3","z":96,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1010,"y":620},"size":{"width":22,"height":42},"angle":0,"id":"ecdb5caf-a718-450b-aa33-f0505acf07a1","z":97,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":410},"size":{"width":22,"height":42},"angle":-90,"id":"ab7dd6c9-3152-4d75-9e82-88ee814831e9","z":98,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":380},"size":{"width":22,"height":42},"angle":-90,"id":"13c9c66e-f7c2-47a3-aa08-8500cbeaf1b2","z":99,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":290},"size":{"width":22,"height":42},"angle":-90,"id":"8417b245-10ea-4a54-a4b3-0106bac20962","z":100,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":320},"size":{"width":22,"height":42},"angle":-90,"id":"b96bdea6-60aa-48e4-af8b-8df61e550bc8","z":101,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":350},"size":{"width":22,"height":42},"angle":-90,"id":"8de0b517-0c9a-4dc3-b8da-03d4e06939e5","z":102,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":440},"size":{"width":22,"height":42},"angle":-90,"id":"aa5dce09-2747-46e7-baf5-eb1ff9f057a2","z":103,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":360,"y":630},"size":{"width":22,"height":42},"angle":0,"id":"e88eb94c-20ce-4344-962d-f2a32082ac86","z":104,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":980,"y":110},"size":{"width":26,"height":53},"angle":0,"id":"6bf78796-461c-44e2-8530-e001bad572d7","z":105,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":470},"size":{"width":22,"height":42},"angle":-90,"id":"bc24b36e-3bff-4f78-bcb8-3e17ba6568de","z":106,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":500},"size":{"width":22,"height":42},"angle":-90,"id":"7452b5c2-4420-4223-af0a-b39dcbe6a911","z":107,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":30,"y":530},"size":{"width":22,"height":42},"angle":-90,"id":"4f8316a9-b30d-479c-b5c9-ddd6235221f3","z":108,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":340},"size":{"width":24,"height":43},"angle":90,"id":"bf967729-bb20-4b52-bc38-2776541ea168","z":109,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":370},"size":{"width":24,"height":43},"angle":90,"id":"b4c15add-9331-4555-a35f-d6fd3e0ccb9e","z":111,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":400},"size":{"width":24,"height":43},"angle":90,"id":"f9b46581-2fd1-4e35-8199-8687acdcf97c","z":112,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":80,"y":180},"size":{"width":1410,"height":70},"angle":0,"id":"ad07d761-f909-43f1-8b21-61f257d5d979","z":113,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":80,"y":540},"size":{"width":1410,"height":60},"angle":0,"id":"daf906f0-cad3-4d98-a90b-08ba1a413f71","z":114,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":80,"y":250},"size":{"width":60,"height":290},"angle":0,"id":"344a0b22-5cf0-4cc9-bf83-ecc13d470acf","z":115,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":420,"y":250},"size":{"width":70,"height":310},"angle":0,"id":"710926fc-cff1-490e-911c-2ad7e007cae4","z":116,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":750,"y":250},"size":{"width":70,"height":300},"angle":0,"id":"5cea549e-b8b4-4712-895d-460b6be8c1d1","z":117,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1080,"y":240},"size":{"width":70,"height":300},"angle":0,"id":"dc27d163-fb8b-41f6-95fd-14c20250e114","z":118,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1430,"y":250},"size":{"width":60,"height":290},"angle":0,"id":"7414c236-43e5-4cc1-9740-04c53e7b11de","z":119,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":440},"size":{"width":26,"height":53},"angle":90,"id":"36a68e44-82e8-480d-8e91-4edab6d26ca5","z":120,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1520,"y":470},"size":{"width":26,"height":53},"angle":90,"id":"aafa4699-970e-40ab-95d9-3a3be1b67ae7","z":121,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":0,"y":730},"size":{"width":1650,"height":80},"angle":0,"id":"05bef56c-156f-454e-abfc-dbbacd395b26","z":122,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1080,"y":600},"size":{"width":80,"height":130},"angle":0,"id":"215e35f0-27bf-475c-829e-f8395b13621e","z":123,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":430,"y":600},"size":{"width":80,"height":130},"angle":0,"id":"4f9a0a59-cf5f-4e5a-9669-08028c78426e","z":124,"attrs":{"body":{"fill":"#808080","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1170,"y":350},"size":{"width":22,"height":42},"angle":-90,"id":"f4fe876d-0252-4d2d-80ac-b6e5c1868603","z":125,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1169,"y":289},"size":{"width":22,"height":42},"angle":-90,"id":"22fa9356-f4fc-483f-9143-6fea3b575157","z":126,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1170,"y":320},"size":{"width":22,"height":42},"angle":-90,"id":"99b235c6-39bb-488e-b6d8-464faba72c16","z":127,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1169,"y":319},"size":{"width":22,"height":42},"angle":-90,"id":"0ca08a10-878f-475a-830f-050e21cb60aa","z":128,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1170,"y":380},"size":{"width":22,"height":42},"angle":-90,"id":"9eee8808-33a1-44b4-8f2d-f08eb636e702","z":129,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1170,"y":410},"size":{"width":22,"height":42},"angle":-90,"id":"3d4cb9cd-67d3-4793-8a7d-7dce284b9725","z":130,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1170,"y":440},"size":{"width":22,"height":42},"angle":-90,"id":"4cf5558a-473c-494a-935b-6c22b3c578d4","z":131,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":860,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"2ce70c12-2dd2-4d52-8eb5-4c65ae2fc57d","z":132,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":920,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"8646acca-21aa-460d-a8a8-2b8095575ea2","z":133,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":890,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"811e4ad9-4661-41f5-8864-321e352e6bfc","z":134,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":980,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"51c4d659-6793-480a-8995-57b659b86ea0","z":135,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":950,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"b0424dca-ca4d-4479-a0c9-5b30daa75dc1","z":136,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":860,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"fb4eaed6-b26d-44c0-8416-e2fa1c879528","z":137,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1020,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"05e8d762-9130-43a3-aa5f-d580cd388313","z":138,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":890,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"2b76f408-c5fc-407e-98d4-e02f6bf2b237","z":139,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":920,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"863ffd5e-cdb6-4f55-8e36-89ee5e145f51","z":140,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":980,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"9a281fd7-e0a2-42f3-a0a1-bee148f2f0f3","z":141,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":950,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"ef2d555b-7db5-4e09-a925-de7159b1f348","z":142,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":570,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"4d83bcf4-da32-49d7-92e4-8e23498d9c74","z":143,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1010,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"729efcb0-d704-4b48-aea5-db23ed05381a","z":144,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":600,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"f511069b-3587-4ea0-94f3-73daefad9797","z":145,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":630,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"73a11bee-27ee-45c1-90af-9a8f7089295c","z":146,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":660,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"f2acaafb-036f-477b-be98-36913ff08b04","z":147,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":690,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"1be3c2af-d74e-4db6-bbdc-5122ee8c7206","z":148,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":580,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"fe178c5c-6eeb-407d-b425-0a9f94b1fed4","z":149,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":550,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"0f0b4f06-e55f-468b-85f1-a456899b5208","z":150,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":610,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"9569d875-37e1-4bd5-9dce-4a17e3fc220e","z":151,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":640,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"83050d35-9971-4af4-a86a-ee2dbdad3d64","z":152,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":670,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"14c058f2-f27c-4048-9b58-1fa704f01aa8","z":154,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":220,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"de83c52e-826a-4155-9bd8-62fa568acfa6","z":155,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":250,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"93260879-1d0c-4fc0-bd2c-03c1c13095bf","z":156,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":280,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"796396fa-ac41-4ae3-bc4a-3872f9d5a460","z":157,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":310,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"bdce4988-a6cb-43cd-b9d6-6401492ef670","z":158,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":340,"y":270},"size":{"width":22,"height":42},"angle":0,"id":"45b6ef3f-c198-4020-b12b-bd17511b478a","z":159,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":180,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"b563f3d1-9101-4e6f-b013-c1cc18706926","z":160,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":210,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"ba0d855e-03a8-4639-a3e3-dcc45c85976a","z":161,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":240,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"9e6d0605-11ea-4298-ab59-c75b65a23de5","z":162,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":270,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"da7fa526-5bee-4feb-955d-fca46c1db7f6","z":163,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":300,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"f1100b9b-c93f-43ec-841c-2174af65a578","z":164,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":330,"y":490},"size":{"width":22,"height":42},"angle":0,"id":"9693c58f-6a2b-4008-be1d-b34880d47e4c","z":166,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1040,"y":320},"size":{"width":24,"height":43},"angle":90,"id":"ce70e2c5-9d07-4897-8691-d3ed7bcbcace","z":167,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1040,"y":350},"size":{"width":24,"height":43},"angle":90,"id":"36aa613f-0f18-43ad-8d35-4363baa2b1ff","z":168,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1040,"y":440},"size":{"width":24,"height":43},"angle":90,"id":"8a4dd421-f141-4701-9c2e-2bce3dddf521","z":169,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1040,"y":380},"size":{"width":24,"height":43},"angle":90,"id":"0f3bbdd9-97df-450e-981d-b95ce2fda5fe","z":170,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1040,"y":410},"size":{"width":24,"height":43},"angle":90,"id":"150f3b9d-b8cb-4269-b152-9b8446716576","z":171,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":320},"size":{"width":24,"height":43},"angle":90,"id":"e92558d9-b3cc-4c69-85bf-008b8d1dd491","z":172,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":320},"size":{"width":24,"height":43},"angle":90,"id":"2a28ec05-167f-4fa6-9e48-e19187c07104","z":174,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":160,"y":310},"size":{"width":22,"height":42},"angle":-90,"id":"9c35d0ab-be77-4b76-99ae-b83ca7331004","z":176,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":1380,"y":430},"size":{"width":24,"height":43},"angle":90,"id":"9308edea-548d-46a4-9a09-13cfa0a30952","z":178,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":510,"y":310},"size":{"width":22,"height":42},"angle":-90,"id":"1d8641d4-abdc-4574-8419-204c0a1a52e6","z":179,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":350},"size":{"width":24,"height":43},"angle":90,"id":"0f430989-90ff-467c-ab5a-24296b6b1fce","z":180,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":380},"size":{"width":24,"height":43},"angle":90,"id":"19a4d062-f018-4538-8eb4-ecd3c102815d","z":181,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":410},"size":{"width":24,"height":43},"angle":90,"id":"e5652842-d9ed-4a5f-93e3-3c4f8fd72e7a","z":182,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":710,"y":440},"size":{"width":24,"height":43},"angle":90,"id":"70d7793e-a781-43a0-85ac-cf41750088c0","z":183,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":510,"y":340},"size":{"width":22,"height":42},"angle":-90,"id":"289a43dc-4209-44ea-abc4-a99640941eac","z":184,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":510,"y":370},"size":{"width":22,"height":42},"angle":-90,"id":"86a2f291-31a4-4780-8830-6cb64311a5b6","z":185,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":510,"y":400},"size":{"width":22,"height":42},"angle":-90,"id":"a22a97b0-c046-420d-8abd-ddfb62680cb5","z":186,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":510,"y":430},"size":{"width":22,"height":42},"angle":-90,"id":"3697e740-ddf8-45db-a2d0-6236f97d267e","z":188,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":160,"y":340},"size":{"width":22,"height":42},"angle":-90,"id":"2e187420-79ad-4fbe-9677-98cd34f56aa1","z":189,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":160,"y":370},"size":{"width":22,"height":42},"angle":-90,"id":"caa03525-3235-41e2-86ea-c9c1717b41e9","z":190,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":160,"y":400},"size":{"width":22,"height":42},"angle":-90,"id":"24680aca-581b-4cf2-95ac-43db0ea750f0","z":191,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":160,"y":430},"size":{"width":22,"height":42},"angle":-90,"id":"d63bc852-e101-49ca-92e0-d914c4b0e973","z":192,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":350},"size":{"width":24,"height":43},"angle":90,"id":"eeb512cc-5e15-4d80-ad7e-7cb4dea3b799","z":193,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":380},"size":{"width":24,"height":43},"angle":90,"id":"90fa863b-8496-4a34-b693-e4dbe04fb9be","z":194,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":410},"size":{"width":24,"height":43},"angle":90,"id":"c7d2eb70-5cb8-4a9e-8622-e6388c597d03","z":195,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":380,"y":440},"size":{"width":24,"height":43},"angle":90,"id":"5fc54f6e-81e3-4537-a82a-f8a1414ea1ab","z":196,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":840,"y":310},"size":{"width":22,"height":42},"angle":-90,"id":"34c4e858-4f14-454e-b882-bc69d37d2a65","z":197,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":840,"y":340},"size":{"width":22,"height":42},"angle":-90,"id":"9b9e11c2-e3eb-42b4-a60a-22839fb8bda2","z":198,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":840,"y":370},"size":{"width":22,"height":42},"angle":-90,"id":"8840c56d-41e8-4b00-9393-6f149359ce74","z":199,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":840,"y":400},"size":{"width":22,"height":42},"angle":-90,"id":"657dee6d-bf39-466d-8b1c-2b804ab066ff","z":200,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}},{"type":"standard.Rectangle","position":{"x":840,"y":430},"size":{"width":22,"height":42},"angle":-90,"id":"73d9bc1f-8143-4ae4-b8f1-abea0349fc42","z":201,"attrs":{"body":{"fill":"#ff8040","stroke-width":0},"label":{"text":"","fontFamily":"Arial"}}}]}'));

var paperScroller = new joint.ui.PaperScroller({ autoResizePaper: true, paper: paper});
//paperScroller.lock();
$('#paper').append(paperScroller.render().el);
paper.on('blank:pointerdown', function (evt) {
	if(!evt.shiftKey){
		console.log("yeah paperScroller");
		paperScroller.startPanning(evt)
	}
});
paperScroller.center();
var commandManager = new joint.dia.CommandManager({
    graph: graph
});

var clipboard = new joint.ui.Clipboard({ useLocalStorage: false });		
var keyboard = new joint.ui.Keyboard;

keyboard.on({
    'ctrl+c': function() {
        // Copy all selected elements and their associated links.
        clipboard.copyElements(selection.collection, graph);
    },

    'ctrl+v': function() {

        var pastedCells = clipboard.pasteCells(graph, {
            translate: { dx: 20, dy: 20 },
            useLocalStorage: true
        });

        var elements = _.filter(pastedCells, function(cell) {
            return cell.isElement();
        });

        // Make sure pasted elements get selected immediately. This makes the UX better as
        // the user can immediately manipulate the pasted elements.
        selection.collection.reset(elements);
    },

    'ctrl+x shift+delete': function() {
        clipboard.cutElements(selection.collection, graph);
    },

    'delete backspace': function(evt) {
        evt.preventDefault();
        graph.removeCells(selection.collection.toArray());
    },

    'ctrl+z': function() {
        commandManager.undo();
        selection.cancelSelection();
    },

    'ctrl+y': function() {
        commandManager.redo();
        selection.cancelSelection();
    },

    'ctrl+a': function() {
        selection.collection.reset(graph.getElements());
    },

    'ctrl+plus': function(evt) {
        evt.preventDefault();
        paperScroller.zoom(0.2, { max: 5, grid: 0.2 });
    },

    'ctrl+minus': function(evt) {
        evt.preventDefault();
        paperScroller.zoom(-0.2, { min: 0.2, grid: 0.2 });
    },

    'keydown:shift': function(evt) {
        paperScroller.setCursor('crosshair');
    },

    'keyup:shift': function() {
        paperScroller.setCursor('grab');
    }
});

///Snaplineess
var snaplines = new joint.ui.Snaplines({ paper: paper })
snaplines.startListening();

var toolbar = new joint.ui.Toolbar({
    // initialize tools with default settings
    tools: ['zoomIn', 'zoomOut', 'zoomToFit', 'zoomSlider', 'undo', 'redo', 
     { type: 'button', name: 'front', text: 'Al frente' },
     { type: 'button', name: 'back', text: 'A atrás' },
     { type: 'button', name: 'serialize', text: 'TO JSON' },
     { type: 'label',  text: 'Mostrar imagen de fondo' },
     { type: 'toggle', name: 'showImage', value:false},
     { type: 'label',  text: 'Modo Administrador' },
     { type: 'toggle', name: 'interactivity', value:true},
     { type: 'label',  text: 'Lineas de ayuda' },
     { type: 'toggle', name: 'snaplines', value:true}, 
     { type: 'button', name: 'clear', text:'Limpiar'},
     { type: 'button', name: 'topng', text:'TO PNG'}],
    references: {
        paperScroller: paperScroller,
        commandManager: commandManager
    }
});
$('.app-header').prepend(toolbar.render().el);
toolbar.on('serialize:pointerclick', function(event) {
	console.log('popo');
    var jsonString = JSON.stringify(graph.toJSON());
    download(jsonString, 'json.txt', 'text/plain');
});

toolbar.on('showImage:change', function(value, event) {
    paper.drawBackground({
		color: 'rgba(0,0,0,0.8)',
		size: '100% 100%',
        image: value ? 'img/escom.jpg' : ''
		});
});
toolbar.on('interactivity:change', function(value, event) {
	 paper.setInteractivity(value);
});
toolbar.on('snaplines:change', function(value, event) {
	 if(value){
	 	snaplines.startListening();
	 }else{
	 	snaplines.stopListening();
	 }
});
toolbar.on('front:pointerclick', function(event) {
   
});
toolbar.on('back:pointerclick', function(event) {
   
});
toolbar.on('clear:pointerclick', function(event) {
   graph.clear;
});

var lightbox = new joint.ui.Lightbox({
	title: 'Image caption goes here.',
	image: 'img/escom.jpg'
});
toolbar.on('topng:pointerclick', function(event) {
	lightbox.open();
});

var selection = new joint.ui.Selection({
	paper: paper,
	useModelGeometry: true
});
/*paper.on('blank:pointerdown', function(evt) {
	if (evt.shiftKey) selection.startSelecting(evt)	
		else paper.removeTools();
});*/
paper.on('blank:pointerdown', function(evt, x, y) {
	if (keyboard.isActive('shift', evt)) {
	    selection.startSelecting(evt);
	} else {
	    selection.cancelSelection();
	    paperScroller.startPanning(evt, x, y);
	    paper.removeTools();
	}

});

paper.on('element:pointerdown', function(elementView, evt) {
    if (keyboard.isActive('ctrl meta', evt)) {
        selection.collection.add(elementView.model);
    }
});

selection.on('selection-box:pointerdown', function(elementView, evt) {

    if (keyboard.isActive('ctrl meta', evt)) {
        evt.preventDefault();
        selection.collection.remove(elementView.model);
    }
});

paper.on('cell:pointerclick', function(cellView) {
    // We don't want a Halo for links.
    if (cellView.model instanceof joint.dia.Link) return;
    var halo = new joint.ui.Halo({ cellView: cellView });
    halo.removeHandle('link');
    halo.removeHandle('fork');
    halo.removeHandle('unlink');
    halo.render();
});
paper.on('element:pointerclick', function(cellView) {
    // open the inspector when the user interacts with an element
    if (cellView.model instanceof joint.dia.Link) return;
    joint.ui.Inspector.create('#inspector', {
        cell: cellView.model,
inputs: {
    attrs: {
        body: {
            fill: {
                type: 'color',
                label: 'Fill color',
                group: 'presentation',
                index: 1
            },
            stroke: {
                type: 'color',
                label: 'Outline color',
                group: 'presentation',
                index: 2
            },
            'stroke-width': {
                type: 'range',
                min: 0,
                max: 50,
                unit: 'px',
                label: 'Outline thickness',
                group: 'presentation',
                index: 3
            }
        },
        label: {
            text: {
                type: 'textarea',
                label: 'Text',
                group: 'text',
                index: 1
            },
            fontSize: {
                type: 'range',
                min: 10,
                max: 100,
                label: 'Font size',
                group: 'text',
                index: 2
            },
            fontFamily: {
                type: 'select',
                options: ['Arial', 'Times New Roman', 'Courier New'],
                label: 'Font family',
                group: 'text',
                index: 3
            }
        }
    }
},
groups: {
presentation: {
    label: 'Presentation',
    index: 1
},
text: {
    label: 'Text',
    index: 2
}
}
	    
    });
});
var stencil = new joint.ui.Stencil({
    paper: paper,
    height: 800,
	groups: {
	      edificio: { label: 'Formas edificio', index: 1 },
	      aula: { label: 'Formas aula', index: 2, closed: true },
	      otras: { label: 'Otras formas', index: 3, closed: true }
	}
});$('#stencil').append(stencil.render().el);

var edificio = new joint.shapes.standard.Rectangle();
edificio.resize(100, 50);
edificio.position(10, 10);
edificio.attr('root/title', 'joint.shapes.standard.Rectangle');
edificio.attr('label/text', '');
edificio.attr('body/fill', '#c0c0c0');
edificio.attr('body/stroke-width', 0);

stencil.loadGroup([edificio], 'edificio');

var salon = new joint.shapes.standard.EmbeddedImage();
salon.position(10, 10);
salon.resize(113, 56);
salon.attr('root/title', 'joint.shapes.standard.EmbeddedImage');
salon.attr('label/text', 'Salon\nNumero');
salon.attr('body/fill', '#ff8040');
salon.attr('image/xlinkHref', 'img/icon/classroom.png');
salon.attr('body/stroke-width', 0);

stencil.loadGroup([salon], 'aula');
var nav = new joint.ui.Navigator({
    paperScroller: paperScroller,
    width: 300,
    height: 150,
    padding: 10,
    zoomOptions: { max: 2, min: 0.2 }
});
nav.$el.appendTo('#navigator');
nav.render();
$('#btnForm').hide();
paper.on('cell:pointerdblclick',function (elementview) {
	var model = elementview.model;
	document.getElementById("txtIDModel").value = model.id;
	var btnForm = $('#btnForm');
	btnForm.click();
});

function download(content, fileName, contentType) {
	var a = document.createElement("a");
	var file = new Blob([content], {type: contentType});
	a.href = URL.createObjectURL(file);
	a.download = fileName;
	a.click();
}